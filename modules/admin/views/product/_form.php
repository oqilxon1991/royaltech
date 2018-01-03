<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Url;
use app\modules\admin\models\Image;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);
use rico\yii2images;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
$image = $model->getImage();
$gallery = $model->getImages();
?>

<div class="product-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="form-group field-product-category_id">
        <label class="control-label" for="product-category_id">Родительская категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $model])?>
        </select>
    </div>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'brand_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\modules\admin\models\Brands::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'color_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\modules\admin\models\Colors::find()->all(), 'id', 'name')) ?>

    <?php
        echo $form->field($model, 'content_ru')->widget(CKEditor::className(), [
            'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
        ]);
    ?>

    <?php
        echo $form->field($model, 'content_uz')->widget(CKEditor::className(), [
            'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])
        ]);
    ?>

    <?= $form->field($model, 'minicontent_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'minicontent_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'keywords_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <?php
    $img = $model->getImage();
    $gallery = $model->getImages();

    // print_r($gallery );
    $img_str='';
    echo ' <div class="row">';
    foreach($gallery as $img_g){
        $url_delete=Url::toRoute(['product/deleteimg', 'id_product' => $model->id, 'id_img' => $img_g->id]); //настройка роутера на нужный урл
        $img_str.='		
		<div class="col-xs-4 col-md-2">
		<div  class="thumbnail product_image_form">
			 <a class="btn delete_product_img" title="Удалить?" href="'.$url_delete.'" data-id="'.$img_g->id.'"><span class="glyphicon glyphicon-remove"></span></a> 
		  <a class="fancybox img-rounded" rel="gallery1" href="'. $model->replace($img_g->getUrl()).'">'.Html::img($model->replace($img_g->getUrl('150x')), ['alt' => '']).'</a>
		</div>
		</div> ';
    }
    echo $img_str;
    echo '</div>';
    ?>



    <?php
    $script = <<< JS
     //клик на удалении
$(document).on("click", '.delete_product_img', function (e) {
	e.preventDefault();
	var isTrue = confirm("Удалить изображение?");
	if(isTrue==true){
		var href=$(this).attr('href');
		$(this).parent('div').parent('div').remove();
		$.get( href );		
	}	
});
JS;
    //маркер конца строки, обязательно сразу, без пробелов и табуляции
    $this->registerJs($script, yii\web\View::POS_READY);
    ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?/*= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) */?>

   <!-- --><?/*= $form->field($model, 'parent_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name')) */?>

    <div class="form-group field-category-parent_id">
        <label class="control-label" for="category-parent_id">Родительская категория</label>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]">
            <option value="0">Самостоятельная категория</option>
            <?= \app\components\MenuWidget::widget(['tpl' => 'select', 'model' => $model])?>

        </select>
    </div>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'keywords_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

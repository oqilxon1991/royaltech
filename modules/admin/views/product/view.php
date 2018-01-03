<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$gallery = $model->getImages();
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name,
            ],
            'name_ru',
            'name_uz',
            //'color_id',
            [
                    'attribute' => 'color_id',
                    'value' => $model->colors->name,
            ],
            //'brand_id',
            [
                'attribute' => 'brand_id',
                'value' => $model->brands->name,
            ],
            'price',
            'minicontent_ru',
            'minicontent_uz',
            'content_ru:html',
            'content_uz:html',
            'keywords_ru',
            'keywords_uz',
            'description_ru',
            'description_uz',
            //'img',
            [
                'attribute' => 'image',
                'value' => "<img src='{$model->replace($img->getUrl())}'>",
                'format' => 'html',
            ],
            //'img',
            // 'hit',
            [
                'attribute' => 'hit',
                'value' => function($data){
                    return !$data->hit ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            //'new',
            [
                'attribute' => 'new',
                'value' => function($data){
                    return !$data->new ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            //'sale',
            [
                'attribute' => 'sale',
                'value' => function($data){
                    return !$data->sale ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
        ],
    ]) ?>
<?php foreach ($gallery as $photo):?>
    <img src='<?= $model->replace($photo->getUrl()); ?>' height="150" width="" />
<?php endforeach;?>
</div>

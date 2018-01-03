<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin();?><?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'category_id',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->category->name;
                },
            ],
            'name_ru',
            'name_uz',
//            'content:ntext',
            'price',
            [
                'attribute' => 'brand_id',
                'value' => function($dat){
                    return $dat->brands->name;
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'color_id',
                'value' => function($data){
                    return $data->colors->name;
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'hit',
                'value' => function($data){
                    return !$data->hit ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' => function($data){
                    return !$data->new ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'sale',
                'value' => function($data){
                    return !$data->sale ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            // 'keywords',
            // 'description',
            // 'img',
            // 'hit',
            // 'new',
            // 'sale',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>

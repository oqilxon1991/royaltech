<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.11.2017
 * Time: 18:54
 */

namespace app\controllers;
use yii\base\Widget;
use app\models\Category;
use app\models\Contacts;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use yii\jui\Slider;

class CategoryController extends AppController{

    public function actionIndex(){
        $hits = Product::find()->where(['hit' => '1'])->limit(8)->all();
        $news = Product::find()->where(['new' => '1'])->limit(8)->all();
        $sales = Product::find()->where(['sale' => '1'])->limit(8)->all();
        $tops = Product::find()->where(['top' => '1'])->limit(2)->all();
        $sliders = Product::find()->where(['slider' => '1'])->all();
        $contacts = Contacts::find()->all();
        $this->setMeta('ROYALTECH.UZ | Интернет магазин электроники в ташкенте');
        return $this->render('index', compact('hits', 'news', 'sales', 'tops', 'sliders', 'contacts'));
    }

    public function actionView($id){


        $category = Category::findOne($id);
        if(empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории нет');

        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 15, 'forcePageParam' => false, 'pageSizeParam' => false]);


        if($category->parent_id == 0){
            $product = new Product();
            $products = $product->getProductsByParentCategory($id);
            //vd($products);
        }else{
            $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        }

        $this->setMeta('ROYALTECH | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'category'));
    }

    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('ROYALTECH.UZ | Поиск: ' . $q);
        if (!$q)
            return $this->render('search');
        $query = Product::find()->where(['like', 'name_ru', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 15, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }

    public function actionLanguage($lang)
    {
        if (isset($_GET['lang'])){
            \Yii::$app->language = $_GET['lang'];
            $cookie = new \yii\web\Cookie([
                'name'=>'lang',
                'value'=>$_GET['lang'],
            ]);
            Yii::$app->getResponse()->getCookies()->add($cookie);
        }
    }
}
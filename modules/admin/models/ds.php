<?php

namespace app\modules\admin\models;
use app\models\Image;
use Yii;


class Product extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'brand_id', 'color_id'], 'integer'],
            [['content_ru', 'hit', 'new', 'sale', 'top', 'slider', 'content_uz'], 'string'],
            [['price'], 'number'],
            [['name_ru', 'minicontent_ru', 'keywords_ru', 'description_ru', 'img', 'name_uz', 'minicontent_uz', 'keywords_uz', 'description_uz'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'minicontent_ru' => Yii::t('app', 'Minicontent Ru'),
            'price' => Yii::t('app', 'Price'),
            'brand_id' => Yii::t('app', 'Brand ID'),
            'color_id' => Yii::t('app', 'Color ID'),
            'keywords_ru' => Yii::t('app', 'Keywords Ru'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'img' => Yii::t('app', 'Img'),
            'hit' => Yii::t('app', 'Hit'),
            'new' => Yii::t('app', 'New'),
            'sale' => Yii::t('app', 'Sale'),
            'top' => Yii::t('app', 'Top'),
            'slider' => Yii::t('app', 'Slider'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'minicontent_uz' => Yii::t('app', 'Minicontent Uz'),
            'keywords_uz' => Yii::t('app', 'Keywords Uz'),
            'description_uz' => Yii::t('app', 'Description Uz'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasOne(Brands::className(), ['id' => 'id']);
    }

    public function getColors()
    {
        return $this->hasOne(Colors::className(), ['id' => 'id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['product_id' => 'id']);
    }

    public function upload(){
        if($this->validate()){
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }

    public function Gallery($id)
    {
        return Image::find()->where(['itemId' => $id])->all();
    }

    public function uploadGallery(){
        if($this->validate()){
            foreach($this->gallery as $file){
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;

                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }

    public  function getName(){
        if (\Yii::$app->language=='ru-RU'){
            return $this->name_ru;
        }
        if (\Yii::$app->language=='uz-UZ'){
            return $this->name_uz;
        }
    }

    public  function getContent(){
        if (\Yii::$app->language=='ru-RU'){
            return $this->content_ru;
        }
        if (\Yii::$app->language=='uz-UZ'){
            return $this->content_uz;
        }
    }

    public  function getMinicontent(){
        if (\Yii::$app->language=='ru-RU'){
            return $this->minicontent_ru;
        }
        if (\Yii::$app->language=='uz-UZ'){
            return $this->minicontent_uz;
        }
    }

    public  function getKeywords(){
        if (\Yii::$app->language=='ru-RU'){
            return $this->keywords_ru;
        }
        if (\Yii::$app->language=='uz-UZ'){
            return $this->keywords_uz;
        }
    }

    public  function getDescription(){
        if (\Yii::$app->language=='ru-RU'){
            return $this->description_ru;
        }
        if (\Yii::$app->language=='uz-UZ'){
            return $this->description_uz;
        }
    }
}



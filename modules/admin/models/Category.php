<?php

namespace app\modules\admin\models;

use Yii;

class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name_ru', 'name_uz'], 'required'],
            [['name_ru', 'keywords_ru', 'description_ru', 'icon', 'name_uz', 'keywords_uz', 'description_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'keywords_ru' => Yii::t('app', 'Keywords Ru'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'icon' => Yii::t('app', 'Icon'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'keywords_uz' => Yii::t('app', 'Keywords Uz'),
            'description_uz' => Yii::t('app', 'Description Uz'),
        ];
    }

    public  function getName(){
        if (\Yii::$app->language=='ru-RU'){
            return $this->name_ru;
        }
        if (\Yii::$app->language=='uz-UZ'){
            return $this->name_uz;
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




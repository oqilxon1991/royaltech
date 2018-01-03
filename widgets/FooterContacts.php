<?php
namespace app\widgets;
use Yii;
use yii\base\Widget;
use app\models\Contacts;




class FooterContacts extends Widget {

    function run(){
        return $this->render('footercontacts/footercontacts');
    }
}
<?
    $langArr = explode('-', Yii::$app->language);
    $lang = $langArr[0];
?>
<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <img src="/images/<?= $category['icon']?>" alt="menu-icon1" />&nbsp;&nbsp;<?= $category['name_'.$lang]?>
    </a>
    <?php if( isset($category['childs']) ): ?>
    <ul>

            <?= $this->getMenuHtml($category['childs'])?>

    </ul>
    <?php endif;?>
</li>
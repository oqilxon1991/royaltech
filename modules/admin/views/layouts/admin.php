<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <!-- Original URL: http://demo.zavana.net/complex/complex/index2.html
    Date Downloaded: 08.11.2017 17:59:33 !-->
    <meta http-equiv="Content-Type" content="text/html"; />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>

    <!-- Standard -->
    <link rel="shortcut icon" href="/images/ficon.png" />
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!--  Preloader  -->
<div id="preloader">
    <div id="loading">
    </div>
</div>
<header>
    <!--  top-header  -->
    <div class="top-header">
        <div class="container">
            <div class="col-md-12">
                <div class="top-header-right">
                    <ul>
                        <?php if (!Yii::$app->user->isGuest): ?>
                        <li>
                            <div>
                                <a href="<?= \yii\helpers\Url::to(['/site/logout'])?>" class="btn btn-default"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Выход) </a>
                            </div>
                        </li>
                        <?php endif;?>
                        <?php if (Yii::$app->user->isGuest) { ?>
                        <li>
                            <div>
                                <a href="<?= \yii\helpers\Url::to(['/admin'])?>" class="btn btn-default"> Войти </a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--  /top-header  -->
    </div>
    <section class="top-md-menu">
        <div class="container">
            <div class="col-sm-12">
                <a href="<?= \yii\helpers\Url::home()?>">
                    <div class="logo">
                        <h6><?= Html::img('@web/images/logo.png', ['alt' => 'Royaltech.uz'])?></h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-menu menu2">
            <div class="container">
                <!--  nav  -->
                <nav class="navbar navbar-inverse navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation </span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations=" fadeInLeft fadeInUp fadeInRight">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?= \yii\helpers\Url::to(['/admin'])?>"><span>Главная </span></a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Категории </span>  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                    <li><a href="<?= \yii\helpers\Url::to(['category/index'])?>">Список категорий </a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['category/create'])?>">Добавить категорию </a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Товары </span>  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                    <li><a href="<?= \yii\helpers\Url::to(['product/index'])?>">Список товаров </a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['product/create'])?>">Добавить товар </a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Бренды </span>  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                    <li><a href="<?= \yii\helpers\Url::to(['brands/index'])?>">Список брендов </a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['brands/create'])?>">Добавить брендов </a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Цвета </span>  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                    <li><a href="<?= \yii\helpers\Url::to(['colors/index'])?>">Список цветов </a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['colors/create'])?>">Добавить цветов </a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
                <!-- /nav end -->
            </div>
        </div>
    </section>
    <!-- header-outer -->

    <!-- /header-outer -->
</header>
<!-- deal-outer -->
<div class="container">
    <div class="clearfix"></div>
    <?php if (Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <?= $content ?>
</div>

<!-- newsletter -->
<div style="height: 100px;"></div>
<section class="newsletter">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <!-- f-weghit -->
                <div class="f-weghit">
                    <img src="/images/logo.png" alt="logo" />
                    <p><strong>Complex </strong> is a premium _________ theme with advanced admin ______. It’s extremely customizable, easy __ use and fully responsive ___ retina ready. </p>
                </div>
                <!-- /f-weghit -->
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <!-- f-weghit2 -->
                <div class="f-weghit2">
                    <h4>БЫСТРЫЕ ССЫЛКИ </h4>
                    <ul>
                        <li class="dropdown">
                            <a href="<?= \yii\helpers\Url::lang()?>" role="button" aria-expanded="false"><span>Главная </span></a>
                        </li>
                        <li class="dropdown">
                            <a href="<?= \yii\helpers\Url::to(['hits/index']);?>" role="button" aria-expanded="false"><span>Хиты продаж! </span></a>
                        </li>
                        <li class="dropdown">
                            <a href="<?= \yii\helpers\Url::to(['bestsellers/index']);?>" role="button" aria-expanded="false"><span>Товары со скидками! </span></a>
                        </li>
                        <li class="dropdown">
                            <a href="<?= \yii\helpers\Url::to(['newproducts/index']);?>" role="button" aria-expanded="false"><span>Новинки </span></a>
                        </li>
                    </ul>
                </div>
            </div><?/*= \app\widgets\FooterContacts::widget();*/?>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <!-- f-weghit -->
                <div class="f-weghit">
                    <h4>КОНТАКТЫ </h4>
                    <ul>
                        <li><i class="icon-location-pin icons" aria-hidden="true"></i>  <strong>Адрес: </strong> г. Ташкент улица Узбекистанская 16 </li>
                        <li><i class="icon-envelope-letter icons"></i>  <strong>Тел: </strong> +(99897) 440-10-01 </li>
                        <li><i class="icon-call-in icons"></i>  <strong>Phone Email: </strong> info@royaltech.uz </li>
                    </ul>
                </div>
                <!-- /f-weghit -->
            </div>
            <!-- copayright -->
            <div class="copayright">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        Copyright ©  2017.<a href="#"> RoyalTech.uz </a> Все права защищены.
                    </div>
                    <div class="text-right col-xs-12 col-sm-6 col-md-6">
                        <p>Разработчик: <a href="#"> Innovative Web Idea</a></p>
                    </div>
                </div>
            </div>
            <!-- /copayright -->

        </div>
    </div>
</footer>

<p id="back-top">
    <a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</p>


<?php
$script = <<< JS
    $('.zoom_01').elevateZoom({
			zoomType: "inner",
			cursor: "crosshair",
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 750
		});
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

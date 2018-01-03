<?php
namespace rico\yii2images\models;
namespace rico\yii2images;
use Yii;
use yii\helpers\Html;
?>
<section class="header-outer2">
    <div class="container">
        <!-- header-slider -->
        <div class="header-slider">
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <!-- masterslider -->
                    <div class="master-slider ms-skin-default" id="masterslider">
                        <!-- new slide -->
                        <div class="ms-slide">

                            <!-- slide background -->
                            <img src="/css/blank.gif" data-src="/images/slider/1.jpg" alt="lorem ipsum dolor sit"/>


                        </div>
                        <!-- end of slide -->

                        <!-- new slide -->
                        <div class="ms-slide">

                            <!-- slide background -->
                            <img src="/css/blank.gif" data-src="/images/slider/2.png" alt="lorem ipsum dolor sit"/>


                        </div>
                        <!-- end of slide -->

                        <!-- new slide -->
                        <div class="ms-slide">

                            <!-- slide background -->
                            <img src="/css/blank.gif" data-src="/images/slider/3.jpg" alt="lorem ipsum dolor sit"/>

                        </div>
                        <!-- end of slide -->

                    </div>
                    <!-- end of masterslider -->
                </div>
            <?php if (!empty($tops) ): ?>
                <?php foreach ($tops as $top):?>
                    <?php $mainImg = $top->getImage();?>
            <div class="col-xs-12 col-sm-6 col-md-4" style="margin-bottom: 37px;">
                <!-- banner-img -->
                <a href="#" class="banner-img" style="background: url(<?= $top->replace($mainImg->getUrl())?>) no-repeat scroll 0 0 / cover;">
                    <!-- banner-text -->
                    <div class="banner-text">
                        <h2><?= $top->name?> </h2>
                        <span class="price">Цена: <?= $top->price?>$ </span>
                    </div>
                    <!-- /banner-text -->
                </a>
                <!-- /banner-img -->
            </div>
                    <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="clearfix"></div>
        <!-- /header-slider end -->
        <!-- .free-shipping -->
        <div class="free-shipping">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-shipping">
                        <i class="icon-rocket icons"></i>
                    </div>
                    <div class="shipping-text">
                        <h4>free shipping  </h4>
                        <p>Free Shipping On All _____ </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-shipping">
                        <i class="icon-earphones-alt icons"></i>
                    </div>
                    <div class="shipping-text">
                        <h4>online support 24/7 </h4>
                        <p>Technical Support 24/7 </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-shipping">
                        <i class="icon-refresh icons"></i>
                    </div>
                    <div class="shipping-text">
                        <h4>MONEY BACK GUARANTEE  </h4>
                        <p>30 Day Money Back </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-shipping">
                        <i class="icon-badge icons"></i>
                    </div>
                    <div class="shipping-text">
                        <h4>MEMBER DISCOUNT </h4>
                        <p>Upto 40% Discount </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.free-shipping -->
    </div>
</section>
<section class="deal-section deal-section2">
    <div class="container">


        <?php if ( !empty($hits) ): ?>
        <div class="title">
            <h2>
                <?= Yii::t('main', 'popular')?>
            </h2>
        </div>

        <div class="electonics ">
            <div class="col-md-12">
                <div class="row">
                    <!-- tab-content -->
                    <div class="tab-content grid-shop">
                        <!-- tab-pane -->
                        <div id="phones" class="tab-pane fade in active">
                            <div class="owl-demo-outer">
                                <!-- #owl-demo -->
                                <div id="owl-demo3" class="deals-wk2">
                                    <div class="item">

                                        <?php foreach ($hits as $hit): ?>
                                            <?php $mainImg = $hit->getImage();?>
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <!-- .pro-text -->
                                            <div class="pro-text text-center">
                                                <!-- .pro-img -->
                                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>">
                                                    <div class="pro-img">
                                                        <?/*= Html::img("@web/images/products/digital/{$hit->img}", ['alt' => $hit->name])*/?>
                                                        <?= Html::img($hit->replace($mainImg->getUrl()), ['alt' => $hit->name])?>
                                                        <sup class="sale-tag">Хит! </sup>
                                                    </div>
                                                </a>
                                                <!-- /.pro-img -->
                                                <div class="pro-text-outer">  <span>Macbook, Laptop </span>
                                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>">
                                                        <h4> <?= $hit->name?>  </h4>
                                                    </a>
                                                    <p class="wk-price">$<?= $hit->price?></p>
                                                </div>
                                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?= $hit->id?>" class="add-btn add-to-cart">Добавить в корзину </a>
                                            </div>
                                            <!-- /.pro-text -->
                                        </div>
                                        <?php endforeach;?>

                                    </div>
                                </div>
                                <!-- /#owl-demo -->
                            </div>
                        </div>
                        <!-- /tab-pane -->
                    </div>
                    <!-- /tab-content -->
                </div>
            </div>
        </div>
        <?php endif;?>

        <div class="half-banner">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <a href="#" class="banner half-banner1">
                        <div class="text">
                            <h4>best digital </h4>
                            <h3>sale smartwatch </h3>
                            <div class="banner-price">
                                $620.00  <span>$60.00   </span>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="#" class="col-xs-12 col-sm-6 col-md-6">
                    <div class="banner half-banner2">
                        <div class="text">
                            <h4>strong prices </h4>
                            <h3>Lenovo Yoga Tablet 2 </h3>
                            <div class="banner-price">
                                $620.00  <span>$60.00   </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php if ( !empty($sales) ): ?>
        <div class="title">
            <h2>
                <?= Yii::t('main', 'bestseller')?>
            </h2>
        </div>
        <!-- /title -->
        <div class="electonics ">
            <div class="col-md-12">
                <div class="row">
                    <!-- tab-content -->
                    <div class="tab-content grid-shop">
                        <!-- tab-pane -->
                        <div id="phones" class="tab-pane fade in active">
                            <div class="owl-demo-outer">
                                <!-- #owl-demo -->
                                <div id="owl-demo3" class="deals-wk2">
                                    <div class="item">
                                        <?php foreach ($sales as $sale): ?>
                                            <?php $mainImg = $sale->getImage();?>
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <!-- .pro-text -->
                                            <div class="pro-text text-center">
                                                <!-- .pro-img -->
                                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $sale->id])?>">
                                                    <div class="pro-img">
                                                        <?= Html::img($sale->replace($mainImg->getUrl()), ['alt' => $sale->name])?>
                                                        <!-- .hover-icon -->
                                                        <sup class="sale-tag">Sale! </sup>
                                                        <!-- /.hover-icon -->
                                                    </div>
                                                </a>
                                                <!-- /.pro-img -->
                                                <div class="pro-text-outer">  <span>Macbook, Laptop </span>
                                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $sale->id])?>">
                                                        <h4> <?= $sale->name?>  </h4>
                                                    </a>
                                                    <p class="wk-price"><?= $sale->price?>  </p>
                                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $sale->id])?>" data-id="<?= $sale->id?>" class="add-btn add-to-cart">Добавить в корзину </a>
                                                </div>
                                            </div>
                                            <!-- /.pro-text -->
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <!-- /#owl-demo -->
                            </div>
                        </div>
                        <!-- /tab-pane -->
                    </div>
                    <!-- /tab-content -->
                </div>
            </div>
        </div>
        <!-- /electonics -->
        <?php endif;?>
        <!-- /electonics -->
        <!-- full-banner -->
        <div class="half-banner">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="#" class="banner">
                        <img src="/images/add-banner-large.jpg" alt="add banner large" />
                    </a>
                </div>
            </div>
        </div>
        <!-- /full-banner -->
        <!-- title -->
        <?php if ( !empty($news) ): ?>
            <div class="title">
                <h2>
                    <?= Yii::t('main', 'newproducts')?>
                </h2>
            </div>
            <!-- /title -->
            <div class="electonics ">
                <div class="col-md-12">
                    <div class="row">
                        <!-- tab-content -->
                        <div class="tab-content grid-shop">
                            <!-- tab-pane -->
                            <div id="phones" class="tab-pane fade in active">
                                <div class="owl-demo-outer">
                                    <!-- #owl-demo -->
                                    <div id="owl-demo3" class="deals-wk2">
                                        <div class="item">
                                            <?php foreach ($news as $new): ?>

                                                <?php $mainImg = $new->getImage();?>
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <!-- .pro-text -->
                                                    <div class="pro-text text-center">
                                                        <!-- .pro-img -->
                                                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $new->id])?>">
                                                            <div class="pro-img">
                                                                <?= Html::img($new->replace($mainImg->getUrl()), ['alt' => $new->name])?>
                                                                <!-- .hover-icon -->
                                                                <sup class="sale-tag">New! </sup>
                                                                <!-- /.hover-icon -->
                                                            </div>
                                                        </a>
                                                        <!-- /.pro-img -->
                                                        <div class="pro-text-outer">  <span>Macbook, Laptop </span>
                                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $new->id])?>">
                                                                <h4> <?= $new->name?>  </h4>
                                                            </a>
                                                            <p class="wk-price"><?= $new->price?>  </p>
                                                            <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $new->id])?>" data-id="<?= $new->id?>" class="add-btn add-to-cart">Добавить в корзину </a>
                                                        </div>
                                                    </div>
                                                    <!-- /.pro-text -->
                                                </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                    <!-- /#owl-demo -->
                                </div>
                            </div>
                            <!-- /tab-pane -->
                        </div>
                        <!-- /tab-content -->
                    </div>
                </div>
            </div>
            <!-- /electonics -->
        <?php endif;?>

    </div>
</section>
<!-- /deal-outer -->

<!-- all-product -->
<section class="all-product" style="background: #ffffff none repeat scroll 0 0;">
    <div class="container">
        <div class="row">
            <div class="testimonal t-pad">
                <!-- .testimonal -->
                <div class="col-md-12 text-center">
                    <div id="home-slider12" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- .testimonal-slider -->
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#home-slider12" data-slide-to="0" class=""><img src="/images/client-log1.png" alt="11" /></li>
                                <li data-target="#home-slider12" data-slide-to="1" class=""><img src="/images/client-log2.png" alt="11" /></li>
                                <li data-target="#home-slider12" data-slide-to="2" class="active"><img src="/images/client-log3.png" alt="11" /></li>
                                <li data-target="#home-slider12" data-slide-to="3" class=""><img src="/images/client-log4.png" alt="11" /></li>
                                <li data-target="#home-slider12" data-slide-to="4" class=""><img src="/images/client-log5.png" alt="11" /></li>
                            </ol>
                        </div>
                        <!-- /.testimonal-slider -->
                    </div>
                </div>
                <!-- /.testimonal -->
            </div>

        </div>
    </div>
</section>
<!-- /all-product -->



<!-- all-product -->
<section class="all-product">
    <div class="container">
        <div class="row">
            <div class="testimonal t-pad">
                <!-- .testimonal -->
                <div class="col-md-12 text-center">
                    <div id="home-slider11" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- .testimonal-slider -->
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="caption">
                                    <p class="animated fadeInRightBig">Duis autem vel eum ______ dolor in hendrerit in _________ velit esse molestie consequat, ___ illum dolore eu feugiat _____ facilisis at vero eros __ accumsan et iusto odio _________ qui blandit.
                                        <br />
                                        <br />
                                        <span>Zcubedesign </span> - Web designer
                                    </p>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#home-slider11" data-slide-to="0" class=""><img src="/images/rc-img.jpg" alt="11" /></li>
                                <li data-target="#home-slider11" data-slide-to="1" class=""><img src="/images/rc-img.jpg" alt="11" /></li>
                                <li data-target="#home-slider11" data-slide-to="2" class="active"><img src="/images/rc-img.jpg" alt="11" /></li>
                                <li data-target="#home-slider11" data-slide-to="3" class=""><img src="/images/rc-img.jpg" alt="11" /></li>
                                <li data-target="#home-slider11" data-slide-to="4" class=""><img src="/images/rc-img.jpg" alt="11" /></li>
                            </ol>
                        </div>
                        <!-- /.testimonal-slider -->
                    </div>
                </div>
                <!-- /.testimonal -->
            </div>

        </div>
    </div>
</section>
<!-- /all-product -->



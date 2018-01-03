<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/style.css',
        'css/bootstrap-dropdownhover.min.css',
        'font/css/font-awesome.min.css',
        'simple-line-icon/css/simple-line-icons.css',
        'stroke-gap-icons/stroke-gap-icons.css',
        'css/animate.min.css',
        'css/style/masterslider.css',
        'css/default/style.css',
        'css/style/style.css',
        'css/baguetteBox.css',
        'owl-carousel/owl.carousel.css',
        'owl-carousel/owl.theme.css',
        'css/jcarousel.connected-carousels.css',
        'css/hover.css',
        'css/wedding/style.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/main.js',
        'js/bootstrap.min.js',
        'js/bootstrap-dropdownhover.min.js',
        'js/jquery.easing.min.js',
        'js/masterslider/jquery.min.js',
        'js/masterslider/masterslider.min.js',
        'js/wow.min.js',
        'owl-carousel/owl.carousel.js',
        'js/custom.js',
        'js/incrementing.js',
        'js/jquery.jcarousel.min.js',
        'js/jcarousel.connected-carousels.js',
        'js/jquery.elevatezoom.js',
        'js/lang.js',
        'js/jquery.flexnav.js',
        'js/navigation.js',
        'js/jquery.sticky.js',
        'js/header-sticky.js',
    ];
}


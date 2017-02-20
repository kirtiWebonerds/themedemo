<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
    "web/css/bootstrap.css",
        'web/css/style.css',
        //'web/css/style6.css',
        'web/css/style_common.css',
       'web/css/animate.css',
       'web/css/magnific-popup.css',

    ];
    public $js = [
    "web/js/jquery-1.11.0.min.js",
    'web/js/wow.min.js',
    'web/js/nivo-lightbox.min.js'
    
    ];
    // public $depends = [
    //      'yii\web\YiiAsset',
    //      'yii\bootstrap\BootstrapAsset',
    // ];
}

<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/styles.css',
    ];
    public $js = [
    //   "js/owl.carousel.js",
    ];
    public $depends = [
       
        'yii\bootstrap\BootstrapAsset',
    ];
}

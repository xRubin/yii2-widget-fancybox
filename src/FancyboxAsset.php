<?php

namespace rubin\yii2\widget\fancybox;

use yii\web\AssetBundle;

class FancyboxAsset extends AssetBundle
{
    public $js = [
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js'
    ];
    public $css = [
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css'
    ];
}
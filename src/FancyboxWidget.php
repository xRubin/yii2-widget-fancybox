<?php

namespace rubin\yii2\widget\fancybox;

use yii\base\Widget;
use yii\helpers\Html;

class FancyboxWidget extends Widget
{
    public $text;
    public $href;

    public $group;

    public $type;
    public $caption;
    public $preload = false;
    public $width;
    public $height;

    public function init()
    {
        parent::init();
        FancyboxAsset::register($this->getView());
    }

    public function run()
    {
        return Html::a($this->text, $this->href, [
            'data-fancybox' => $this->group,
            'data-caption' => $this->caption,
            'data-type' => $this->type,
            'data-preload' => var_export($this->preload, true),
            'data-width' => $this->width,
            'data-height' => $this->height,
        ]);
    }
}
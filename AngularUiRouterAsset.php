<?php

namespace maybeworks\angularui;

use yii\web\AssetBundle;

class AngularUiRouterAsset extends AssetBundle
{
    public $sourcePath = '@common/packages/angular-ui-router/release';

    public $css = [
    ];

    public $js = [
        'angular-ui-router.js',
    ];

    public $depends = [
    ];
}

<?php
namespace expresateweb\adminlte3\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css'
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'expresateweb\adminlte3\assets\BaseAsset',
        'expresateweb\adminlte3\assets\PluginAsset'
    ];
}
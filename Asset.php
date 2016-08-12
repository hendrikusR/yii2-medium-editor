<?php
namespace bukapeta\mediumeditor;



class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/mediumeditor/yii2-medium-editor/assets';
    public $css = ['css/medium-editor.min.css'];
    public $js = ['js/medium-editor.min.js'];
    public $theme = 'default';
    public function registerAssetFiles($view)
    {
        $this->css[] = 'css/themes/' . $this->theme . '.min.css';
        parent::registerAssetFiles($view);
    }
}
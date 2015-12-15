<?php
/**
 * Created by Touqeer Shafi.
 * Email: touqeer.shafi@gmail.com
 * Website: touqeershafi.com
 * Date: 12/15/15
 * Time: 1:45 PM
 */

namespace touqeer\notification;

class NotifierAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/touqeer/yii2-adminlte2-notification/web';

    public $js = [
        'notify.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

/**
 * End of file NotifierAsset.php
 */
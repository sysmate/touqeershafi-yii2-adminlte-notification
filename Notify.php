<?php

namespace touqeer\notification;

use yii\helpers\Url;
use yii\web\View;

class Notify extends \yii\base\Widget
{

    public $interval = 3600;

    public $url;

    public function init()
    {
        parent::init();

        $this->url = Url::to(['notification/notification/index']);
    }

    public function run()
    {
        $notifications = Notifier::get_notifications(\Yii::$app->user->getId());

        $this->register();

        return $this->render('notification',
            [
                'notifications' => $notifications,
                'count' => count($notifications),
            ]
        );


    }

    public function register()
    {

        $view = $this->getView();

        NotifierAsset::register($view);

        $js = <<<JS
        $(".notifications-menu").notify({
            url: "{$this->url}",
            interval: "$this->interval"
        })
JS;
        $view->registerJs($js);

    }
}

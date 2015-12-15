<?php

namespace touqeer\notification;

class Notify extends \yii\base\Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $notifications = Notifier::get_notifications(\Yii::$app->user->getId());
        return $this->render('notification',
            [
                'notifications' => $notifications,
                'count' => count($notifications)
            ]
        );
    }
}

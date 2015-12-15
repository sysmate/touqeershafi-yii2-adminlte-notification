<?php

/**
 * Created by Touqeer Shafi.
 * Email: touqeer.shafi@gmail.com
 * Website: touqeershafi.com
 * Date: 12/15/15
 * Time: 2:04 PM
 */

namespace touqeer\notification\controllers;

use touqeer\notification\Notifier;
use touqeer\notification\Notify;
use yii;

class NotificationController extends \yii\web\Controller
{

    public function init()
    {
        parent::init();

        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
    }

    public function actionIndex()
    {
        return Notifier::get_notifications(Yii::$app->user->getId());
    }
}

/**
 * End of file NotificationController.php
 */
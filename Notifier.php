<?php

namespace touqeer\notification;

use Yii;


/**
 * This is the model class for table "notification".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $is_viewed
 * @property string $icon
 * @property string $text
 * @property string $url
 * @property string $created
 */
class Notifier extends \yii\db\ActiveRecord
{

    const VIEWED = 1;
    const NOT_VIEWED = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'is_viewed'], 'integer'],
            [['user_id','is_viewed','text'],'required'],
            [['text'], 'string'],
            [['created'], 'safe'],
            [['icon'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'is_viewed' => 'Is Viewed',
            'icon' => 'Icon',
            'text' => 'Text',
            'url' => 'Url',
            'created' => 'Created',
        ];
    }

    /**
     * @param $icon
     * @param $text
     * @param null $url
     * @param null $user_id
     * @return bool
     */
    public static function push($icon, $text, $url = null ,$user_id = null)
    {

        $user_id = (!$user_id) ? Yii::$app->user->getId() : $user_id;

        $notification = new Notifier();
        $notification->user_id = $user_id;
        $notification->is_viewed = self::NOT_VIEWED;
        $notification->icon = $icon;
        $notification->text = $text;
        $notification->url = $url;
        $notification->created = date("Y-m-d H:i:s");
        return $notification->save();
    }

    public static function get_notifications($user_id = null)
    {

        $user_id = (!$user_id) ? Yii::$app->user->getId() : $user_id;

        return self::find()->where(['user_id' => $user_id])->orderBy(['created' => SORT_DESC,'is_viewed' => SORT_ASC])->asArray()->all();
    }

}

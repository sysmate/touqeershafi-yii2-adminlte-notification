<?php

use yii\db\Schema;
use yii\db\Migration;

class m151215_071135_notification extends Migration
{
    public function up()
    {
        $this->createTable('notification', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'is_viewed' => $this->integer(),
            'icon' => $this->string(30),
            'text' => $this->string(250),
            'url' => $this->string(400),
            'created' => $this->dateTime()
        ]);
    }

    public function down()
    {
        $this->dropTable('notification');
    }
}

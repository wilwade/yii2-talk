<?php

use yii\db\Schema;
use yii\db\Migration;

class m140805_010955_post extends Migration
{
    public function safeUp()
    {
        $this->createTable('post',[
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey('post_user_id', 'post', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');

    }

    public function safeDown()
    {
        $this->dropForeignKey('post_user_id', 'post');
       
        $this->dropTable('post');
    }
}

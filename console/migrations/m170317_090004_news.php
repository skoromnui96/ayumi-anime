<?php

use yii\db\Schema;
use yii\db\Migration;

class m170317_090004_news extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%news}}',
            [
                'id'=> $this->primaryKey(11),
                'name'=> $this->string(255)->notNull(),
                'text'=> $this->text()->notNull(),
                'slug'=> $this->string(255)->notNull(),
                'date'=> $this->date()->notNull(),
                'status'=> $this->integer()->notNull()->defaultValue(0),
                'on_page'=> $this->integer()->notNull()->defaultValue(0),
                'views'=> $this->integer()->notNull()->defaultValue(0),
            ],$tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}

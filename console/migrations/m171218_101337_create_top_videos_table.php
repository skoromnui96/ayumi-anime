<?php

use yii\db\Migration;

/**
 * Handles the creation of table `top_videos`.
 */
class m171218_101337_create_top_videos_table extends Migration
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
            '{{%top_videos}}',
            [
                'id'=> $this->primaryKey(11),
                'status' => $this->integer(1)->notNull()->defaultValue(0),
                'link' => $this->string(),
            ],$tableOptions
        );
        $this->createIndex('id','{{%top_videos}}','id',false);
    }

    public function safeDown()
    {
        $this->dropIndex('id', '{{%top_videos}}');
        $this->dropTable('{{%top_videos}}');
    }
}

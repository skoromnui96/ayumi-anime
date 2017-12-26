<?php

use yii\db\Migration;

/**
 * Handles the creation of table `send_subscr`.
 */
class m171226_094946_create_send_subscr_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('send_subscr', [
            'id' => $this->primaryKey(),
            'video_id' => $this->integer()->notNull(),
            'subscriber_id' => $this->integer()->notNull(),
            'end' => $this->boolean()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('send_subscr');
    }
}

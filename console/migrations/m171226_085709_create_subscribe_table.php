<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscribe`.
 */
class m171226_085709_create_subscribe_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('subscribe', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull(),
            'addtime' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('subscribe');
    }
}

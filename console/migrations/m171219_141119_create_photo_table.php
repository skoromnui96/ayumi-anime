<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 */
class m171219_141119_create_photo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'date' => $this->date()->notNull(),
            'category_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('photo');
    }
}

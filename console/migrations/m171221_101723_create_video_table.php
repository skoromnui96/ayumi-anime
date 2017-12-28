<?php

use yii\db\Migration;

/**
 * Handles the creation of table `video`.
 */
class m171221_101723_create_video_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(255),
            'slug'=> $this->string(255)->notNull(),
            'main_text' => $this->text(),
            'video' => $this->string(),
            'views' => $this->integer()->notNull()->defaultValue(0),
            'like' => $this->integer()->notNull()->defaultValue(0),
            'unlike' => $this->integer()->notNull()->defaultValue(0),
            'category_id' => $this->integer(),
            'price' => $this->float(),
            'old_price' => $this->float(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('video');
    }
}

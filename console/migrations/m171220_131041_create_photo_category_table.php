<?php

use yii\db\Migration;
use yii\db\sqlite\Schema;

/**
 * Handles the creation of table `photo_category`.
 */
class m171220_131041_create_photo_category_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $connection = Yii::$app->db;
        try {
            $this->createTable('{{%photo_category}}', [
                'id' => Schema::TYPE_PK . "",
                'parent_id' => Schema::TYPE_INTEGER . "(11)",
                'name' => Schema::TYPE_STRING . "(55) NOT NULL",
                'code' => Schema::TYPE_STRING . "(155)",
                'slug' => Schema::TYPE_STRING . "(255)",
                'text' => Schema::TYPE_TEXT . "",
                'image' => Schema::TYPE_TEXT . "",
                'sort' => Schema::TYPE_INTEGER . "(11)",
            ], $tableOptions);

            $this->createTable('{{%photo_to_photo_category}}', [
                'id' => Schema::TYPE_PK . "",
                'product_id' => Schema::TYPE_INTEGER . "(11) NOT NULL",
                'category_id' => Schema::TYPE_INTEGER . "(11) NOT NULL",
            ], $tableOptions);

            $this->createIndex('category_id', '{{%photo}}', 'category_id', 0);
            $this->createIndex('id', '{{%photo_category}}', 'id,parent_id', 0);
            $this->addForeignKey(
                'fk_category', '{{%photo}}', 'category_id', '{{%photo_category}}', 'id', 'CASCADE', 'CASCADE'
            );

            $this->addForeignKey(
                'fk_cat_to_photo', '{{%photo_to_photo_category}}', 'product_id', '{{%photo}}', 'id', 'CASCADE', 'CASCADE'
            );

            $this->addForeignKey(
                'fk_cat_to_photo_2', '{{%photo_to_photo_category}}', 'category_id', '{{%photo}}', 'id', 'CASCADE', 'CASCADE'
            );
        } catch (Exception $e) {
            echo 'Catch Exception ' . $e->getMessage() . ' ';
        }
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $connection = Yii::$app->db;
        try {
            $this->dropTable('{{%photo_category}}');
            $this->dropTable('{{%photo_category}}');

        } catch (Exception $e) {
            echo 'Catch Exception ' . $e->getMessage() . ' ';
        }
    }
}

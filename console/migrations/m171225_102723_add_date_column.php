<?php

use yii\db\Migration;

/**
 * Class m171225_102723_add_date_column
 */
class m171225_102723_add_date_column extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('video', 'date', 'date');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('video', 'date');
    }
}

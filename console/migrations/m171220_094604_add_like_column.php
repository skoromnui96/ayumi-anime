<?php

use yii\db\Migration;

/**
 * Class m171220_094604_add_like_column
 */
class m171220_094604_add_like_column extends Migration
{

    public function up()
    {
        $this->addColumn('photo', 'like', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('photo', 'like');
    }

}

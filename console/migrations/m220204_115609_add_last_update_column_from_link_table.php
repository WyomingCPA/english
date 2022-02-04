<?php

use yii\db\Migration;

/**
 * Class m220204_115609_add_last_update_column_from_link_table
 */
class m220204_115609_add_last_update_column_from_link_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('link', 'last_update', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220204_115609_add_last_update_column_from_link_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220204_115609_add_last_update_column_from_link_table cannot be reverted.\n";

        return false;
    }
    */
}

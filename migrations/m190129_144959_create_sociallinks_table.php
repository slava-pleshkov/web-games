<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sociallinks`.
 */
class m190129_144959_create_sociallinks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sociallinks', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('sociallinks');
    }
}

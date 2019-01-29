<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seos`.
 */
class m190129_144823_create_seos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('seos', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('seos');
    }
}

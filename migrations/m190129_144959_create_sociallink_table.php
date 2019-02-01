<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sociallinks`.
 */
class m190129_144959_create_sociallink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sociallink', [
            'id' => $this->primaryKey(),
			'icon' => $this->string(),
			'url' => $this->string(),
			'status' => $this->integer(),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('sociallink');
    }
}

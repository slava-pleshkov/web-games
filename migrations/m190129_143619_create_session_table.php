<?php

use yii\db\Migration;

/**
 * Handles the creation of table `session`.
 */
class m190129_143619_create_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('session', [
			'id' => $this->char(40)->notNull(),
			'expire' => $this->integer(),
			'data' => $this->binary(),
			'user_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('session');
    }
}

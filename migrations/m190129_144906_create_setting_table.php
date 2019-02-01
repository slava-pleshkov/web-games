<?php

use yii\db\Migration;

/**
 * Handles the creation of table `settings`.
 */
class m190129_144906_create_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('setting', [
            'id' => $this->primaryKey(),
			'about_footer' => $this->text(),
			'mail' => $this->string(),
			'phone' => $this->string(),
			'address' => $this->string(),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('setting');
    }
}

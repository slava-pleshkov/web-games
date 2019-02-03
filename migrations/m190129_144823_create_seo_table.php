<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seos`.
 */
class m190129_144823_create_seo_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('seo', [
			'id' => $this->primaryKey(),
			'title' => $this->string(),
			'description' => $this->string(),
			'keyword' => $this->string(),
			'status' => $this->integer(),
//			'created_at' => $this->integer()->notNull(),
//			'updated_at' => $this->integer()->notNull(),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('seo');
	}
}

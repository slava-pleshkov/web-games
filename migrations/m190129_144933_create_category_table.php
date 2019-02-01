<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categories`.
 */
class m190129_144933_create_category_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('category', [
			'id' => $this->primaryKey(),
			'name' => $this->string(),
			'url' => $this->string()->unique(),
			'seo_id' => $this->integer(),
			'status' => $this->integer(),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
		]);
		$this->createIndex(
			'idx-category-seo_id',
			'category',
			'seo_id'
		);
		$this->addForeignKey(
			'fk-category-seo_id',
			'category',
			'seo_id',
			'seo',
			'id',
			'CASCADE'
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey(
			'fk-category-seo_id',
			'category'
		);
		$this->dropIndex(
			'idx-category-seo_id',
			'category'
		);
		$this->dropTable('category');
	}
}

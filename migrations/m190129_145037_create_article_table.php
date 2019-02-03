<?php

use yii\db\Migration;

/**
 * Handles the creation of table `articles`.
 */
class m190129_145037_create_article_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('article', [
			'id' => $this->primaryKey(),
			'title' => $this->string(),
			'url' => $this->string()->unique(),
			'image' => $this->string(),
			'text' => $this->text(),
			'seo_id' => $this->integer(),
			'category_id' => $this->integer(),
			'user_id' => $this->integer(),
			'status' => $this->integer(),
//			'created_at' => $this->integer()->notNull(),
//			'updated_at' => $this->integer()->notNull(),
		]);
		$this->createIndex(
			'idx-article-seo_id',
			'article',
			'seo_id'
		);
		$this->addForeignKey(
			'fk-article-seo_id',
			'article',
			'seo_id',
			'seo',
			'id',
			'CASCADE'
		);
		$this->createIndex(
			'idx-article-category_id',
			'article',
			'category_id'
		);
		$this->addForeignKey(
			'fk-article-category_id',
			'article',
			'category_id',
			'category',
			'id',
			'CASCADE'
		);
		$this->createIndex(
			'idx-article-user_id',
			'article',
			'user_id'
		);
		$this->addForeignKey(
			'fk-article-user_id',
			'article',
			'user_id',
			'user',
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
			'fk-article-seo_id',
			'article'
		);
		$this->dropIndex(
			'idx-article-seo_id',
			'article'
		);
		$this->dropForeignKey(
			'fk-article-category_id',
			'article'
		);
		$this->dropIndex(
			'idx-article-category_id',
			'article'
		);
		$this->dropForeignKey(
			'fk-article-user_id',
			'article'
		);
		$this->dropIndex(
			'idx-article-user_id',
			'article'
		);
		$this->dropTable('article');
	}
}

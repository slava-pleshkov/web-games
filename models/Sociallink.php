<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "sociallink".
 *
 * @property int $id
 * @property string $icon
 * @property string $url
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Sociallink extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'sociallink';
	}

	/**
	 * {@inheritdoc}
	 */
	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['status', 'created_at', 'updated_at'], 'integer'],
			[['created_at', 'updated_at'], 'required'],
			[['icon', 'url'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'icon' => 'Icon',
			'url' => 'Url',
			'status' => 'Status',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sociallink".
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property string $url
 * @property int $status
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
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title', 'icon', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'icon' => 'Icon',
            'url' => 'Url',
            'status' => 'Status',
        ];
    }
}

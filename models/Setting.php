<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property int $id
 * @property string $about_footer
 * @property string $mail
 * @property string $phone
 * @property string $address
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about_footer'], 'string'],
            [['mail', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about_footer' => 'About Footer',
            'mail' => 'Mail',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}

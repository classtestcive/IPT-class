<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fcpuserinfo".
 *
 * @property int $userid
 * @property string $fullname
 * @property int $chancenumber
 */
class Fcpuserinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fcpuserinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'chancenumber'], 'required'],
            [['chancenumber'], 'integer'],
            [['fullname'], 'string', 'max' => 40],
            [['fullname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'fullname' => 'Fullname',
            'chancenumber' => 'Chancenumber',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_disease".
 *
 * @property string $code
 * @property string $disease
 * @property string $icd10
 */
class CDisease extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_disease';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code'], 'string', 'max' => 2],
            [['disease', 'icd10'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'disease' => 'Disease',
            'icd10' => 'Icd10',
        ];
    }
}

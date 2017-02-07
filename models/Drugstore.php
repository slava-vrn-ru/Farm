<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drugstore".
 *
 * @property integer $id
 * @property string $address
 * @property string $phone
 * @property string $pic
 */
class Drugstore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drugstore';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address'], 'required'],
            [['pic'], 'string'],
            [['address'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'phone' => 'Phone',
            'pic' => 'Pic',
        ];
    }

    /**
     * @inheritdoc
     * @return DrugstoreQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DrugstoreQuery(get_called_class());
    }
}

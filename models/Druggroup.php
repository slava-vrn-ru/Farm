<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "druggroup".
 *
 * @property integer $id
 * @property string $name
 */
class Druggroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'druggroup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @inheritdoc
     * @return DruggroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DruggroupQuery(get_called_class());
    }
}

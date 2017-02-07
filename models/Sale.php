<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property integer $id
 * @property integer $id_pillcost
 * @property integer $id_store
 * @property string $date
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pillcost', 'id_store'], 'required'],
            [['id_pillcost', 'id_store'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pillcost' => 'Id Pillcost',
            'id_store' => 'Id Store',
            'date' => 'Date',
        ];
    }

    /**
     * @inheritdoc
     * @return SaleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SaleQuery(get_called_class());
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drug".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_grp
 */
class Drug extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drug';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_grp'], 'required'],
            [['id_grp'], 'integer'],
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
            'id_grp' => 'Id Grp',
        ];
    }

    /**
     * @inheritdoc
     * @return DrugQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DrugQuery(get_called_class());
    }
}

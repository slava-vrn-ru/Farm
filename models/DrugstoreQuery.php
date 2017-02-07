<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Drugstore]].
 *
 * @see Drugstore
 */
class DrugstoreQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Drugstore[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Drugstore|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

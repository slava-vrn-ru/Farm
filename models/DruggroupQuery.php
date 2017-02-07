<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Druggroup]].
 *
 * @see Druggroup
 */
class DruggroupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Druggroup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Druggroup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

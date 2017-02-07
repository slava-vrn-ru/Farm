<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Drugstore */

$this->title = 'Update Drugstore: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Drugstores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drugstore-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

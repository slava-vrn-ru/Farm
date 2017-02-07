<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Drugstore */

$this->title = 'Create Drugstore';
$this->params['breadcrumbs'][] = ['label' => 'Drugstores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugstore-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

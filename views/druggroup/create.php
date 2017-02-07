<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Druggroup */

$this->title = 'Create Druggroup';
$this->params['breadcrumbs'][] = ['label' => 'Druggroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="druggroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

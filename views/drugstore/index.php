<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DrugstoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drugstores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugstore-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Drugstore', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address',
            'phone',
            'pic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use app\models\Communications;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CommunicationsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Communications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="communications-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Communications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comm_id',
            'topic',
            'message:ntext',
            'communicated_by',
            'status',
            //'communicated_on',
            //'created_on',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Communications $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'comm_id' => $model->comm_id]);
                 }
            ],
        ],
    ]); ?>


</div>

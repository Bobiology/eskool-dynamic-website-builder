<?php

use app\models\Bootcamp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BootcampSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bootcamp Activities';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bootcamp-activities-index">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Home',['/home/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bootcamp Activities', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'activity_id',
            'activity_name',
            'description:ntext',
            'created_on',
            'event_date',
            //'application_link',
            //'activity_type',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bootcamp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'activity_id' => $model->activity_id]);
                 }
            ],
        ],
    ]); ?>


</div>

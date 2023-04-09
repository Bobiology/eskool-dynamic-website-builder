<?php

use app\models\Microsoft;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MicrosoftSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Microsoft Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="microsoft-activities-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Microsoft Activities', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, Microsoft $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'activity_id' => $model->activity_id]);
                 }
            ],
        ],
    ]); ?>


</div>

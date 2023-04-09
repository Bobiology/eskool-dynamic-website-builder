<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Microsoft $model */

$this->title = $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Microsoft Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="microsoft-activities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'activity_id' => $model->activity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'activity_id' => $model->activity_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'activity_id',
            'activity_name',
            'description:ntext',
            'created_on',
            'event_date',
            'application_link',
            'activity_type',
            'status',
        ],
    ]) ?>

</div>

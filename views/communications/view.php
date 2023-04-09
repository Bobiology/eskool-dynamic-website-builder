<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Communications $model */

$this->title = $model->comm_id;
$this->params['breadcrumbs'][] = ['label' => 'Communications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="communications-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'comm_id' => $model->comm_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'comm_id' => $model->comm_id], [
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
            'comm_id',
            'topic',
            'message:ntext',
            'communicated_by',
            'status',
            'communicated_on',
            'created_on',
        ],
    ]) ?>

</div>

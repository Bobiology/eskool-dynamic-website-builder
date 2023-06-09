<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Activities $model */

$this->title = $model->activity_name;
//$this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="activities-view">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Activities',['/activities/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'activity_name',
            'description:ntext',
            'activity_date',
            'status',
            'created_on',
        ],
    ]) ?>

</div>

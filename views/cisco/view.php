<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cisco $model */

$this->title = $model->activity_name;
//$this->params['breadcrumbs'][] = ['label' => 'Cisco Academies', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cisco-academy-view">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Cisco Activities',['/cisco/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
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
            'activity_type',
            'status',
            'activity_id',
            'activity_name',
            'description:ntext',
            'created_on',
            'event_date',
            'application_link',
        ],
    ]) ?>

</div>

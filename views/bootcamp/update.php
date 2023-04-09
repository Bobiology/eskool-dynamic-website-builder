<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bootcamp $model */

$this->title = 'Update Bootcamp Activities: ' . $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Bootcamp Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'activity_id' => $model->activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bootcamp-activities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

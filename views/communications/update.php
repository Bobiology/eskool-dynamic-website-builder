<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Communications $model */

$this->title = 'Update Communications: ' . $model->comm_id;
$this->params['breadcrumbs'][] = ['label' => 'Communications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comm_id, 'url' => ['view', 'comm_id' => $model->comm_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="communications-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

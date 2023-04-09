<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cisco $model */

$this->title = 'Update Cisco Academy: ' . $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Cisco Academies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'activity_id' => $model->activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cisco-academy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

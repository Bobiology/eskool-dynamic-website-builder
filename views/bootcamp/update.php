<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bootcamp $model */

$this->title = 'Update Bootcamp Activities: ' . $model->activity_name;
//$this->params['breadcrumbs'][] = ['label' => 'Bootcamp Activities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'activity_id' => $model->activity_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bootcamp-activities-update">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Bootcamp Activities',['/bootcamp/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

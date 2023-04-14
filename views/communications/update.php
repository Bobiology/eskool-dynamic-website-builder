<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Communications $model */

$this->title = 'Update Communications: ' . $model->topic;
//$this->params['breadcrumbs'][] = ['label' => 'Communications', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->comm_id, 'url' => ['view', 'comm_id' => $model->comm_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="communications-update">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Communications',['/communications/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

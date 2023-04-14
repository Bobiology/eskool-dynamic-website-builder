<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Staff $model */

$this->title = 'Update Staff: ' . $model->usr_full_name;
//$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->usr_id, 'url' => ['view', 'usr_id' => $model->usr_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-update">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Staff',['/staff/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

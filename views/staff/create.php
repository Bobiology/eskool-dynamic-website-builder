<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Staff $model */

$this->title = 'Create Staff';
//$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Staff',['/staff/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

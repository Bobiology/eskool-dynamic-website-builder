<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bootcamp $model */

$this->title = 'Create Bootcamp Activities';
//$this->params['breadcrumbs'][] = ['label' => 'Bootcamp Activities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bootcamp-activities-create">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Bootcamp Activities',['/bootcamp/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

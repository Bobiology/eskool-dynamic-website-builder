<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Microsoft $model */

$this->title = 'Create Microsoft Activities';
//$this->params['breadcrumbs'][] = ['label' => 'Microsoft Activities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="microsoft-activities-create">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Activities',['/microsoft/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

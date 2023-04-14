<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Activities $model */

$this->title = 'Update Activities: ' . $model->activity_name;
//$this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="activities-update">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Activities',['/activities/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

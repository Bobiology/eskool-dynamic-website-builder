<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Activities $model */

$this->title = 'Create Activities';
//$this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activities-create">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Activities',['/activities/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

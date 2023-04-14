<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Courses $model */

$this->title = 'Update Courses: ' . $model->course_code;
//$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->course_code, 'url' => ['view', 'course_code' => $model->course_code]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="courses-update">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Courses',['/courses/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

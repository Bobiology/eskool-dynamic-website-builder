<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CoursesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'course_code') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'course_description') ?>

    <?= $form->field($model, 'date_created') ?>

    <?= $form->field($model, 'date_modified') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'education_level') ?>

    <?php // echo $form->field($model, 'course_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

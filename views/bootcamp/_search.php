<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BootcampSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bootcamp-activities-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'activity_id') ?>

    <?= $form->field($model, 'activity_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'created_on') ?>

    <?= $form->field($model, 'event_date') ?>

    <?php // echo $form->field($model, 'application_link') ?>

    <?php // echo $form->field($model, 'activity_type') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

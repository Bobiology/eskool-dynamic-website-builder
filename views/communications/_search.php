<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CommunicationsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="communications-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'comm_id') ?>

    <?= $form->field($model, 'topic') ?>

    <?= $form->field($model, 'message') ?>

    <?= $form->field($model, 'communicated_by') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'communicated_on') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\StaffSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usr_id') ?>

    <?= $form->field($model, 'user_types_id') ?>

    <?= $form->field($model, 'usr_auth_salt') ?>

    <?= $form->field($model, 'usr_created_by') ?>

    <?= $form->field($model, 'usr_date_created') ?>

    <?php // echo $form->field($model, 'usr_date_modified') ?>

    <?php // echo $form->field($model, 'usr_email') ?>

    <?php // echo $form->field($model, 'usr_full_name') ?>

    <?php // echo $form->field($model, 'usr_last_login') ?>

    <?php // echo $form->field($model, 'usr_modified_by') ?>

    <?php // echo $form->field($model, 'usr_phone_no') ?>

    <?php // echo $form->field($model, 'usr_roles') ?>

    <?php // echo $form->field($model, 'usr_session_expiry') ?>

    <?php // echo $form->field($model, 'usr_staff_id') ?>

    <?php // echo $form->field($model, 'usr_status') ?>

    <?php // echo $form->field($model, 'usr_username') ?>

    <?php // echo $form->field($model, 'usr_title') ?>

    <?php // echo $form->field($model, 'usr_education_level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

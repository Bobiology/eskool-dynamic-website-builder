<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Staff $model */
/** @var ActiveForm $form */
?>
<div class="site-staff">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'usr_email') ?>
        <?= $form->field($model, 'usr_full_name') ?>
        <?= $form->field($model, 'usr_phone_no') ?>
        <?= $form->field($model, 'usr_roles') ?>
        <?= $form->field($model, 'usr_staff_id') ?>
        <?= $form->field($model, 'usr_status') ?>
        <?= $form->field($model, 'usr_username') ?>
        <?= $form->field($model, 'usr_title') ?>
        <?= $form->field($model, 'usr_education_level') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-staff -->

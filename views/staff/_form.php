<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Staff $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'usr_staff_id')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'usr_full_name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'usr_email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'usr_phone_no')->textInput() ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['ADMIN'=>'ADMIN','USER'=>'USER']; ?>
                <?= $form->field($model, 'usr_roles')->dropDownList($items,['prompt' => 'Select Role']) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['ACTIVE'=>'ACTIVE','INACTIVE'=>'INACTIVE']; ?>
                <?= $form->field($model, 'usr_status')->dropDownList($items,['prompt' => 'Select Status']) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'usr_username')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['Mr.'=>'Mr.','Mrs.'=>'Mrs.','Miss.'=>'Miss.','Dr.'=>'Dr.','Prof.'=>'Prof.']; ?>
                <?= $form->field($model, 'usr_title')->dropDownList($items,['prompt' => 'Select Title']) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['PHD Degree'=>'PHD Degree', 'Masters Degree'=>'Masters Degree', 'Bachelors Degree'=>'Bachelors Degree','Diploma'=>'Diploma','Certificate'=>'Certificate'] ?>
                <?= $form->field($model, 'usr_education_level')->dropDownList($items,['prompt' => 'Select Academic Level']);?>
            </div>
        </div>
    </div>
<br/>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= Html::submitButton("Save", ['class'=>'btn btn-primary']); ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

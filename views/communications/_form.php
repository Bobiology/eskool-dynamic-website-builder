<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Communications $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="communications-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'communicated_by')->textInput() ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['ACTIVE'=>'ACTIVE','INACTIVE'=>'INACTIVE']; ?>
                <?= $form->field($model, 'status')->dropDownList($items,['prompt' => 'Select Status']) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'communicated_on')->textInput(['type' =>'date']) ?>
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

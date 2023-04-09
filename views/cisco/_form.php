<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cisco $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cisco-academy-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'activity_name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['Hackathon'=>'Hackathon','Bootcamp'=>'Bootcamp','Leap Program'=>'Leap Program','Workshops'=>'Workshops']; ?>
                <?= $form->field($model, 'activity_type')->dropDownList($items,['prompt' => 'Select Activity Type']) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'event_date')->textInput(['type'=>'date']) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($model, 'application_link')->textInput() ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $items = ['ACTIVE'=>'ACTIVE','EXPIRED'=>'EXPIRED']; ?>
                <?= $form->field($model, 'status')->dropDownList($items,['prompt' => 'Select Status']) ?>
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

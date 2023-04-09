<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Activities $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="activities-form">

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
                <?= $form->field($model, 'activity_date')->textInput(['type' => 'date']) ?>
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
    <br/>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>

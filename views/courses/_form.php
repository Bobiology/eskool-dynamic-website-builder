<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Courses $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form -> field($model, 'course_code'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form -> field($model, 'course_name'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form -> field($model, 'course_description')->textarea(['rows'=>'6']);?>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="form-group">
        <div class="col-lg-6">
            <?php $items = ['PHD Degree'=>'PHD Degree', 'Masters Degree'=>'Masters Degree', 'Bachelors Degree'=>'Bachelors Degree','Diploma'=>'Diploma','Certificate'=>'Certificate'] ?>
            <?= $form->field($model, 'education_level')->dropDownList($items,['prompt' => 'Select Academic Level']);?>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?php $status = ['ACTIVE'=>'ACTIVE','INACTIVE'=>'INACTIVE']; ?>
                <?= $form -> field($model, 'status') ->dropDownList($status,['prompt'=>'Select status']); ?>
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

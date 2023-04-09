<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

/** @var yii\widgets\ActiveForm $this */

$this->title = 'eSkool';
?>
<?php echo $this->render('common/headers') ?>
<h1>CREATE NEW COURSE</h1>
<div class="site-index">
    <div class="body-content">
        <?php
        $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form -> field($course, 'course_code'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form -> field($course, 'course_name'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form -> field($course, 'course_description')->textarea(['rows'=>'6']);?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                <?php $items = ['PHD'=>'PHD Degree', 'Masters'=>'Masters Degree', 'Bachelors'=>'Bachelors Degree','Diploma'=>'Diploma','Certificate'=>'Certificate'] ?>
                <?= $form->field($course, 'education_level')->dropDownList($items,['prompt' => 'Select Academic Level']);?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                   <?php $status = ['1'=>'ACTIVE','0'=>'INACTIVE']; ?>
                    <?= $form -> field($course, 'status') ->dropDownList($status,['prompt'=>'Select status']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <div class="col-lg-3">
                        <?= Html::submitButton("Create Courses", ['class'=>'btn btn-primary']); ?>
                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app ->homeUrl; ?> class=' btn btn-primary'>Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Courses $model */

$this->title = $model->course_name;
//$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="courses-view">
    <span style="margin-bottom: 20px"><?= Html::a('<<< Back To Courses',['/courses/index'],['class'=>'btn btn-primary']) ?></span> <br/> <br/>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'course_code' => $model->course_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'course_code' => $model->course_code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'course_code',
            'course_name',
            'course_description:ntext',
            'status',
            'education_level',
        ],
    ]) ?>

</div>

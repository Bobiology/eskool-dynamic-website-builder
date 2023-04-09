<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Staff $model */

$this->title = $model->usr_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'usr_id' => $model->usr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'usr_id' => $model->usr_id], [
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
                'usr_id',
            'usr_staff_id',
            'usr_email:email',
            'usr_full_name',
            'usr_phone_no',
            'usr_roles',
            'usr_status',
            'usr_username',
            'usr_title',
            'usr_education_level',
        ],
    ]) ?>

</div>

<?php

use app\models\Staff;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StaffSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'usr_staff_id',
            /*'usr_id',
            'user_types_id',
            'usr_auth_salt',
            'usr_created_by',
            'usr_date_created',*/
            //'usr_date_modified',
            'usr_email:email',
            'usr_full_name',
            //'usr_last_login',
            //'usr_modified_by',
            'usr_phone_no',
            'usr_roles',
            //'usr_session_expiry',
            'usr_status',
            'usr_username',
            'usr_title',
            'usr_education_level',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Staff $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'usr_id' => $model->usr_id]);
                 }
            ],
        ],
    ]); ?>


</div>

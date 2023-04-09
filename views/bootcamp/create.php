<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bootcamp $model */

$this->title = 'Create Bootcamp Activities';
$this->params['breadcrumbs'][] = ['label' => 'Bootcamp Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bootcamp-activities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

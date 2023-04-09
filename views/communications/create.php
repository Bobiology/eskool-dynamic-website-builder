<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Communications $model */

$this->title = 'Create Communications';
$this->params['breadcrumbs'][] = ['label' => 'Communications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="communications-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cisco $model */

$this->title = 'Create Cisco Academy';
$this->params['breadcrumbs'][] = ['label' => 'Cisco Academies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cisco-academy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

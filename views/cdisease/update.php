<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CDisease */

$this->title = 'Update Cdisease: ' . ' ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Cdiseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cdisease-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentattendance */

$this->title = 'Update Studentattendance: ' . $model->saId;
$this->params['breadcrumbs'][] = ['label' => 'Studentattendances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->saId, 'url' => ['view', 'id' => $model->saId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studentattendance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

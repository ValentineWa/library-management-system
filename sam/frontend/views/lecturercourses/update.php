<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lecturercourses */

$this->title = 'Update Lecturercourses: ' . $model->lcId;
$this->params['breadcrumbs'][] = ['label' => 'Lecturercourses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lcId, 'url' => ['view', 'id' => $model->lcId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lecturercourses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

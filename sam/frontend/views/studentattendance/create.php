<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentattendance */

$this->title = 'Create Studentattendance';
$this->params['breadcrumbs'][] = ['label' => 'Studentattendances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentattendance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

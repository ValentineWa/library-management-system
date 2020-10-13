<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lecturercourses */

$this->title = 'Create Lecturercourses';
$this->params['breadcrumbs'][] = ['label' => 'Lecturercourses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturercourses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

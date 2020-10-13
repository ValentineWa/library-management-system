<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Author */

$this->title = 'Update Author: ' . $model->authorId;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->authorId, 'url' => ['view', 'id' => $model->authorId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

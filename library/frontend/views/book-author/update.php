<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookAuthor */

$this->title = 'Update Book Author: ' . $model->baId;
$this->params['breadcrumbs'][] = ['label' => 'Book Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->baId, 'url' => ['view', 'id' => $model->baId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

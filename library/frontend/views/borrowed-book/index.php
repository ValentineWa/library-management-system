<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BorrowedBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Borrowedbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrowedbook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Borrowedbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bbId',
            'studentId',
            'bookId',
            'borrowDate',
            'returnDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

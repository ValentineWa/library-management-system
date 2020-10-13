<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookAuthor */
/* @var $form yii\widgets\ActiveForm */
$authors = User::find()->all();
$authors = ArrayHelper::map($authors, 'id','username');
$books = User::find()->all();
$books = ArrayHelper::map($books, 'id','username');
?>

<div class="book-author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'authorId')->dropDownList($authors) ?>

    <?= $form->field($model, 'bookId')->dropDownList($books) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

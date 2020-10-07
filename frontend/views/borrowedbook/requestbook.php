<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Book;
/* @var $this yii\web\View */
/* @var $model frontend\models\Book */
/* @var $form ActiveForm */


$books = ArrayHelper::map(Book::find()->where(['status'=>0])->all(), 'bookId', 'bookName');

?>

<div class="requestbook">

    <?php $form = ActiveForm::begin(['id' => 'book-create']); ?>
 

        <?= $form->field($model, 'bookName')->dropDownList($books,['disabled' => true])?>
        <?= $form->field($model, 'borrowDate')->hiddenInput(['value'=>date('yy/m/d')])->label(false) ?>
      
        <div class="form-group">
            <?= Html::submitButton('Borrow', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- requestbook -->

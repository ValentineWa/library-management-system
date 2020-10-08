<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Book;
use frontend\models\Borrowedbook;
/* @var $this yii\web\View */
/* @var $model frontend\models\Book */
/* @var $form ActiveForm */


$books = ArrayHelper::map(Book::find()->all(), 'bookId', 'bookName');

?>

<div class="requestbook">

    <?php $form = ActiveForm::begin(); ?>
 

        <?= $form->field($model, 'bookId')->dropDownList($books,['disabled' => true])?>
        <?= $form->field($model, 'borrowDate')->textInput(['value'=>date('yy/m/d'), 'disabled' => true])->label(false) ?>
      
        <div class="form-group">
            <?= Html::submitButton('Borrow', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- requestbook -->

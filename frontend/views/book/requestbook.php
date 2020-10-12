<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Book;
use frontend\models\Borrowedbook;
use frontend\models\Student;
/* @var $this yii\web\View */
/* @var $model frontend\models\Book */
/* @var $form ActiveForm */


$books = ArrayHelper::map(Book::find()->all(), 'bookId', 'bookName');
$studentId = Student::find()->where(['userId'=>Yii::$app->user->id])->One();

?>

<div class="requestbook">

    <?php $form = ActiveForm::begin(['id'=>'requestbook']); ?>
 
        <?= $form->field($model, 'studentId')->hiddenInput(['value'=>$studentId->studentId])->label(false) ?> 
        <?= $form->field($model, 'bookId')->dropDownList($books)?>
        <?= $form->field($model, 'borrowDate')->textInput(['value'=>date('yy/m/d')])->label(false) ?>
       <?= $form->field($model, 'expectedReturn')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd'
    ]
    ]);
        ?>
        <div class="form-group">
            <?= Html::submitButton('Borrow', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- requestbook -->


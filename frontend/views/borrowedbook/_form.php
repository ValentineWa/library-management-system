<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Book;
use frontend\models\Student;

/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowedbook */
/* @var $form yii\widgets\ActiveForm */

$students = ArrayHelper::map(Student::find()->all(), 'studentId', 'fullName');
$books = ArrayHelper::map(Book::find()->where(['status'=>0])->all(), 'bookId', 'bookName');

?>


<div class="borrowedbook-form">

 <?php $form = ActiveForm::begin(['id' => 'borrowedbook-create']); ?>
  <?= $form->field($model, 'borrowDate')->hiddenInput(['value'=>date('yy/m/d')])->label(false) ?>
    
 <?php if($borrow==1){
        $studentId = Student::find()->where(['userId'=>\yii::$app->user->id])->one();
     ?>
        <?= $form->field($model, 'studentId')->hiddenInput(['value'=>$studentId->studentId])->label(false) ?>
    <?php }else{?>
    	<?= $form->field($model, 'studentId')->dropDownList($students) ?>
	<?php }?>
    <?= $form->field($model, 'bookId')->dropDownList($books) ?>

  
    
    <?= $form->field($model, 'expectedReturn')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd'
    ]
    ]);
        ?>
     
    
    
    
  


      
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

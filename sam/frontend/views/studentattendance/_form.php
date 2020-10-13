<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentattendance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studentattendance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentId')->textInput() ?>

    <?= $form->field($model, 'lecturerId')->textInput() ?>

    <?= $form->field($model, 'courseId')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

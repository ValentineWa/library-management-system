<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lecturercourses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lecturercourses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lecturerId')->textInput() ?>

    <?= $form->field($model, 'courseId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

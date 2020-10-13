<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;
use nex\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowedbook */
/* @var $form yii\widgets\ActiveForm */
$users = User::find()->all();
$users = ArrayHelper::map($users, 'id','username');
?>

<div class="borrowedbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentId')->dropDownList($users) ?>

    <?= $form->field($model, 'bookId')->dropDownList($users) ?>

    <?= $form->field($model, 'borrowDate')->textInput() ?>

    <?= $form->field($model, 'returnDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

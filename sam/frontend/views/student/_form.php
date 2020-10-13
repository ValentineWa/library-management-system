<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
$users = User::find()->all();
$users = ArrayHelper::map($users, 'id','username');
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentName')->dropDownList($users) ?>

    <?= $form->field($model, 'studentNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idNo')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'phoneNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateofJoin')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter Admission date ...'],
        'pluginOptions' => [
            'autoclose'=>true
        ]
    ]);?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

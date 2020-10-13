

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
$users = User::find()->all();
$users = ArrayHelper::map($users, 'id','username');

?>
<div class="student-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'userId')->dropDownList($users) ?>
    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'idNumber')->textInput() ?>
    <?= $form->field($model, 'regNo')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
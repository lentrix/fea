<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->dropDownList(
        ["", 'Mr.'=>'Mr.', "Ms."=>"Ms.", "Mrs."=>"Mrs.", "Dr."=>"Dr.",
         "Engr."=>"Engr.", "Capt."=>"Capt.", "Rev. Fr."=>"Rev. Fr.", "Msgr."=>"Msgr."]
    ) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

<?php /**

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => true]) ?>

**/ ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

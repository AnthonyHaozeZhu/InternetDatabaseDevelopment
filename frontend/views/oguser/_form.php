<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oguser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oguser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uPwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uPhone')->textInput() ?>

    <?= $form->field($model, 'uRname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uAuthority')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

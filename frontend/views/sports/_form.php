<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sports-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'smallSportsID')->textInput() ?>

    <?= $form->field($model, 'rsmallSports')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sSports')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sFoundTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

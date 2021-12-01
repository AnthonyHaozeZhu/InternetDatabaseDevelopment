<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ogssportsid */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogssportsid-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'smallSportsID')->textInput() ?>

    <?= $form->field($model, 'rsmallSports')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sSportsID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

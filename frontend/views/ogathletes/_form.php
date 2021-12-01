<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ogathletes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogathletes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alsRetired')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

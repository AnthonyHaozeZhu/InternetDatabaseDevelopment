<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ogrecordranking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogrecordranking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sports')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sportsRecord')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sportsYear')->textInput() ?>

    <?= $form->field($model, 'sportsAthletesID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ogauthority */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogauthority-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isManager')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

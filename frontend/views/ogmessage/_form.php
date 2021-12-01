<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ogmessageboard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogmessageboard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bId')->textInput() ?>

    <?= $form->field($model, 'bUId')->textInput() ?>

    <?= $form->field($model, 'bContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

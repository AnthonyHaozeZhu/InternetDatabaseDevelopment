<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OgmessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogmessageboard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bId') ?>

    <?= $form->field($model, 'bUId') ?>

    <?= $form->field($model, 'bContent') ?>

    <?= $form->field($model, 'bTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

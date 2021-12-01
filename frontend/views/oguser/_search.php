<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OguserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oguser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idOG_User') ?>

    <?= $form->field($model, 'uName') ?>

    <?= $form->field($model, 'uPwd') ?>

    <?= $form->field($model, 'uPhone') ?>

    <?= $form->field($model, 'uRname') ?>

    <?php // echo $form->field($model, 'uAuthority') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

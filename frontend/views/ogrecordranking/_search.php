<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OgrecordrankingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogrecordranking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sportsID') ?>

    <?= $form->field($model, 'sports') ?>

    <?= $form->field($model, 'sportsRecord') ?>

    <?= $form->field($model, 'sportsYear') ?>

    <?= $form->field($model, 'sportsAthletesID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OgathletesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogathletes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'aID') ?>

    <?= $form->field($model, 'aName') ?>

    <?= $form->field($model, 'aCountry') ?>

    <?= $form->field($model, 'alsRetired') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

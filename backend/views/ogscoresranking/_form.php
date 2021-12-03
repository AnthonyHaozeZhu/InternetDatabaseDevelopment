<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ogscoresranking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogscoresranking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goldRank')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medalsRank')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

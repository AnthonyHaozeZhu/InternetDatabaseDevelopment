<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ognoticeboard */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 

    $user = Yii::$app->user->identity->id;
    $time = time();

?>

<div class="ognoticeboard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bManager')->input('text',['value'=> $user]) ?>

    <?= $form->field($model, 'bContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bTime')->input('text',['value'=> $time]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

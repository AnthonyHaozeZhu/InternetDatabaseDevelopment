<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User;
//use Yii;

/* @var $this yii\web\View */
/* @var $model app\models\Ogmessageboard */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 

    $user = Yii::$app->user->identity->username;
    $time = time();

?>

<div class="ogmessageboard-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'bId')->textInput() ?> -->

    <?= $form->field($model, 'bUId')-> input('text',['value'=> $user]) ?>

    <?= $form->field($model, 'bContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bTime')->input('text',['value'=> $time]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

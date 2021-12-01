<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogmessageboard */

$this->title = 'Create Ogmessageboard';
$this->params['breadcrumbs'][] = ['label' => 'Ogmessageboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogmessageboard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

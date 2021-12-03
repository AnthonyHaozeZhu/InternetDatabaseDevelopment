<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogmessageboard */

$this->title = 'Update Ogmessageboard: ' . $model->bId;
$this->params['breadcrumbs'][] = ['label' => 'Ogmessageboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bId, 'url' => ['view', 'id' => $model->bId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ogmessageboard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

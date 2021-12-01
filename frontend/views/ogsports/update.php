<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogsports */

$this->title = 'Update Ogsports: ' . $model->sSportsID;
$this->params['breadcrumbs'][] = ['label' => 'Ogsports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sSportsID, 'url' => ['view', 'id' => $model->sSportsID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ogsports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

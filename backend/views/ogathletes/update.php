<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogathletes */

$this->title = 'Update Ogathletes: ' . $model->aID;
$this->params['breadcrumbs'][] = ['label' => 'Ogathletes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aID, 'url' => ['view', 'id' => $model->aID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ogathletes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

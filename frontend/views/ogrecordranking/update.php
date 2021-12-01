<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogrecordranking */

$this->title = 'Update Ogrecordranking: ' . $model->sportsID;
$this->params['breadcrumbs'][] = ['label' => 'Ogrecordrankings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sportsID, 'url' => ['view', 'id' => $model->sportsID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ogrecordranking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

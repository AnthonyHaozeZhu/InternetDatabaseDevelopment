<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogscoresranking */

$this->title = 'Update Ogscoresranking: ' . $model->rID;
$this->params['breadcrumbs'][] = ['label' => 'Ogscoresrankings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rID, 'url' => ['view', 'id' => $model->rID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ogscoresranking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

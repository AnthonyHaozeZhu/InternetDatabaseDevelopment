<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ognoticeboard */

$this->title = 'Update Ognoticeboard: ' . $model->nId;
$this->params['breadcrumbs'][] = ['label' => 'Ognoticeboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nId, 'url' => ['view', 'id' => $model->nId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ognoticeboard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

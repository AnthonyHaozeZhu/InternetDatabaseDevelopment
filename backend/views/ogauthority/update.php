<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogauthority */

$this->title = 'Update Ogauthority: ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Ogauthorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'id' => $model->userId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ogauthority-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

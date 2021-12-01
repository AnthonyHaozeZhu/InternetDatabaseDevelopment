<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sports */

$this->title = 'Update Sports: ' . $model->smallSportsID;
$this->params['breadcrumbs'][] = ['label' => 'Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->smallSportsID, 'url' => ['view', 'id' => $model->smallSportsID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

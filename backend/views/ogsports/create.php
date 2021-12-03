<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogsports */

$this->title = 'Create Ogsports';
$this->params['breadcrumbs'][] = ['label' => 'Ogsports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogsports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

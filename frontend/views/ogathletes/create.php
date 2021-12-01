<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogathletes */

$this->title = 'Create Ogathletes';
$this->params['breadcrumbs'][] = ['label' => 'Ogathletes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogathletes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

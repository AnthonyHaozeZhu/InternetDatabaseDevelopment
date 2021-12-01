<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sports */

$this->title = 'Create Sports';
$this->params['breadcrumbs'][] = ['label' => 'Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

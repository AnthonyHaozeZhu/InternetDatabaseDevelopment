<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogauthority */

$this->title = 'Create Ogauthority';
$this->params['breadcrumbs'][] = ['label' => 'Ogauthorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogauthority-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

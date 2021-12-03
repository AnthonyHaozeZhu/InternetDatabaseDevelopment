<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oguser */

$this->title = 'Create Oguser';
$this->params['breadcrumbs'][] = ['label' => 'Ogusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oguser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

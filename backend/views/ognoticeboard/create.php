<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ognoticeboard */

$this->title = 'Create Ognoticeboard';
$this->params['breadcrumbs'][] = ['label' => 'Ognoticeboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ognoticeboard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

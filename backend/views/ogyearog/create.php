<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogyearog */

$this->title = 'Create Ogyearog';
$this->params['breadcrumbs'][] = ['label' => 'Ogyearogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogyearog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

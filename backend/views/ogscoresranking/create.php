<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogscoresranking */

$this->title = 'Create Ogscoresranking';
$this->params['breadcrumbs'][] = ['label' => 'Ogscoresrankings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogscoresranking-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

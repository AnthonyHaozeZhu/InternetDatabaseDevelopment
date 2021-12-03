<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ogssportsid */

$this->title = 'Create Ogssportsid';
$this->params['breadcrumbs'][] = ['label' => 'Ogssportsids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogssportsid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

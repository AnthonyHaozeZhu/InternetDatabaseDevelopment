<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oguser */

$this->title = 'Update Oguser: ' . $model->idOG_User;
$this->params['breadcrumbs'][] = ['label' => 'Ogusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idOG_User, 'url' => ['view', 'id' => $model->idOG_User]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oguser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

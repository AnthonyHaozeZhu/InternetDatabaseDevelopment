<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgauthoritySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ogauthorities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogauthority-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ogauthority', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'isManager',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

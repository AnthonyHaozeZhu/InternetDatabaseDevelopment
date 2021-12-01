<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgssportsidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ogssportsids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogssportsid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ogssportsid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'smallSportsID',
            'rsmallSports',
            'sSportsID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

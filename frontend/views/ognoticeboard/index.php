<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgnoticeboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ognoticeboards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ognoticeboard-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ognoticeboard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nId',
            'bManager',
            'bContent:ntext',
            'bTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

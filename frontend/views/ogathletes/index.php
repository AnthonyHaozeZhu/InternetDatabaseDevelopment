<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgathletesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ogathletes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogathletes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ogathletes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aID',
            'aName',
            'aCountry',
            'alsRetired',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

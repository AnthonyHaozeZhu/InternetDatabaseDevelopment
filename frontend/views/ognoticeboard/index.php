<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgnoticeboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '公告板';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="公告板">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'options' => [
            'style'=>'overflow: auto; word-wrap: break-word;'
        ],
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'nId',
            //'bManager',
            [
                'attribute'=>'bContent',
                // 'contentOptions' => [
                // 'style'=>'word-wrap:break-word;word-break:break-all'
                // ],
            'headerOptions' => ['width' => '700']
            ],
            [
                'attribute'=>'bTime',
                'value'=>function($model){
                    return date('Y-m-d', $model->bTime);
                    
                }
            ]

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgmessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言板';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogmessageboard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
    <?php   
    if(!Yii::$app->user->isGuest){
        echo Html::a('点击进行留言', ['create'], ['class' => 'btn btn-success']);
    }
    else
    {
        echo Html::a('登陆后进行留言', yii\helpers\Url::to(['/site/login']), ['class' => 'btn btn-info']);
    }
    ?>
    </p>
        
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'options' => [
            'style'=>'overflow: auto; word-wrap: break-word;'
        ],
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'bId',
            'bUId',
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
                    
                },
            ]

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

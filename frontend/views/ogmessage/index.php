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
    ?>
    </p>
        
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'bId',
            'bUId',
            'bContent:ntext',
            'bTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

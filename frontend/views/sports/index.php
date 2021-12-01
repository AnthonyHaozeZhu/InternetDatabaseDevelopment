<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '项目信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sports-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            
            'rsmallSports',
            'sSports',
            'sFoundTime:datetime',
        ],
        'rowOptions'=>function($model,$key, $index){
            if($index%2 === 0){
                return ['style'=>'background:#C0C0C0'];
            }
        },
    ]); ?>
    

</div>

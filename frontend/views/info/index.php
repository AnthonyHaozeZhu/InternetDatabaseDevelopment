<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '历届冬奥会信息查询';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            [
                'attribute'=>'rID',
                'value'=>function($model){
                    return "第{$model->rID}届";
                }
            ],
            'year',
            'country',
            'hostCity',
            'goldRank',
            'medalsRank',

        ],
        'rowOptions'=>function($model,$key, $index){
            if($index%2 === 0){
                return ['style'=>'background:#C0C0C0'];
            }
        },
    ]); ?>


</div>

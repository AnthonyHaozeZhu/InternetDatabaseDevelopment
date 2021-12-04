<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RecordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '冬奥会历史纪录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="records-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'sports',
            'sportsRecord',
            'sportsYear',
            'aName',
            'aCountry',
            [
                'attribute'=>'alsRetired',
                'value'=>function($model){
                    if($model->alsRetired == 'M')
                    {
                        return "否";
                    }
                    else
                    {
                        return "是";
                    }
                }
            ]
        ],
    ]); ?>


</div>

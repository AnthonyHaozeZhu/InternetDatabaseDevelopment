<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OguserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ogusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oguser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oguser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idOG_User',
            'uName',
            'uPwd',
            'uPhone',
            'uRname',
            //'uAuthority',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

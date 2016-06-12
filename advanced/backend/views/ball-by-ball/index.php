<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BallByBallSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ball By Balls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ball-by-ball-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ball By Ball', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ball_no',
            'match_id',
            'runs',
            'wicket',
            // 'n_w',
            // 'b_lb',
            // 'bowler',
            // 'batsmen',
            // 'wkeeper',
            // 'feilder',
            // 'innings',
            // 'created_at',
            // 'updated_at',
            // 'status',
            // 'priority',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

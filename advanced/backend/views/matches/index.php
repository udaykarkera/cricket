<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MatchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matches-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Matches', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tournament',
            'root',
            'type',
            'scheduled_at',
            // 'toss',
            // 'batting_first',
            // 'home_team',
            // 'home_runs',
            // 'home_balls',
            // 'home_wks',
            // 'away_team',
            // 'away_runs',
            // 'away_balls',
            // 'away_wks',
            // 'result',
            // 'run_rate',
            // 'details',
            // 'comments',
            // 'created_at',
            // 'updated_at',
            // 'status',
            // 'priority',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

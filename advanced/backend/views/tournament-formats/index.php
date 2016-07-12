<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use backend\models\TournamentFormatsSearch;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TournamentFormatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tournament Formats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-formats-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tournament Formats', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column) {
                    $searchModel = new TournamentFormatsSearch();
                    $searchModel->id = $model->id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams); 
                },
            ],
            'name',
            'created_at',
            'updated_at',
            'status',
            // 'priority',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'export' => false,
    ]); ?>

</div>

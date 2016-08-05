<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TournamentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tournaments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournaments-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create New Tournament', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'label' => 'Tournaments',
                'format' => 'raw',
                'value'     => function ($model) {
                    return Html::a(Html::encode($model->name),'index.php?r=tournaments/view&id='.$model->id, array('target'=>'_blank'));
                },
            ],
            'level0.name',
            [
                'attribute' => 'matchFormat.name',
                'format' => 'raw',
                'value'     => function ($model) {
                    return Html::a(Html::encode($model->matchFormat->name),'index.php?r=match-formats/view&id='.$model->matchFormat->id, array('target'=>'_blank'));
                },
            ],
            [
                'attribute' => 'tournamentFormat.name',
                'format' => 'raw',
                'value'     => function ($model) {
                    return Html::a(Html::encode($model->tournamentFormat->name),'index.php?r=tournament-formats/view&id='.$model->tournamentFormat->id, array('target'=>'_blank'));
                },
            ],
            'organisation0.name',
            'year_count',
            'home_away',
            // 'status',
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Matches */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matches-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tournament',
            'root',
            'type',
            'scheduled_at',
            'toss',
            'batting_first',
            'home_team',
            'home_runs',
            'home_balls',
            'home_wks',
            'away_team',
            'away_runs',
            'away_balls',
            'away_wks',
            'result',
            'run_rate',
            'details',
            'comments',
            'created_at',
            'updated_at',
            'status',
            'priority',
        ],
    ]) ?>

</div>

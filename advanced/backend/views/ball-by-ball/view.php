<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BallByBall */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ball By Balls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ball-by-ball-view">

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
            'ball_no',
            'match_id',
            'runs',
            'wicket',
            'n_w',
            'b_lb',
            'bowler',
            'batsmen',
            'wkeeper',
            'feilder',
            'innings',
            'created_at',
            'updated_at',
            'status',
            'priority',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TournamentFormats */

$this->title = 'Update Tournament Format: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tournament Formats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tournament-formats-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

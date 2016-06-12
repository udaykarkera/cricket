<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TournamentFormats */

$this->title = 'Create Tournament Formats';
$this->params['breadcrumbs'][] = ['label' => 'Tournament Formats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-formats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

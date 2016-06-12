<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MatchFormats */

$this->title = 'Create Match Formats';
$this->params['breadcrumbs'][] = ['label' => 'Match Formats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-formats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

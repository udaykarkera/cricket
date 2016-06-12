<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BallByBall */

$this->title = 'Create Ball By Ball';
$this->params['breadcrumbs'][] = ['label' => 'Ball By Balls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ball-by-ball-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

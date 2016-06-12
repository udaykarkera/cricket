<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MatchesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matches-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tournament') ?>

    <?= $form->field($model, 'root') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'scheduled_at') ?>

    <?php // echo $form->field($model, 'toss') ?>

    <?php // echo $form->field($model, 'batting_first') ?>

    <?php // echo $form->field($model, 'home_team') ?>

    <?php // echo $form->field($model, 'home_runs') ?>

    <?php // echo $form->field($model, 'home_balls') ?>

    <?php // echo $form->field($model, 'home_wks') ?>

    <?php // echo $form->field($model, 'away_team') ?>

    <?php // echo $form->field($model, 'away_runs') ?>

    <?php // echo $form->field($model, 'away_balls') ?>

    <?php // echo $form->field($model, 'away_wks') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'run_rate') ?>

    <?php // echo $form->field($model, 'details') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'priority') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

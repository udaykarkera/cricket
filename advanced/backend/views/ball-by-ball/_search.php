<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BallByBallSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ball-by-ball-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ball_no') ?>

    <?= $form->field($model, 'match_id') ?>

    <?= $form->field($model, 'runs') ?>

    <?= $form->field($model, 'wicket') ?>

    <?php // echo $form->field($model, 'n_w') ?>

    <?php // echo $form->field($model, 'b_lb') ?>

    <?php // echo $form->field($model, 'bowler') ?>

    <?php // echo $form->field($model, 'batsmen') ?>

    <?php // echo $form->field($model, 'wkeeper') ?>

    <?php // echo $form->field($model, 'feilder') ?>

    <?php // echo $form->field($model, 'innings') ?>

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

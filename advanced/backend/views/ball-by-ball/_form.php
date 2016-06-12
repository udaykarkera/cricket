<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BallByBall */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ball-by-ball-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ball_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'runs')->textInput() ?>

    <?= $form->field($model, 'wicket')->textInput() ?>

    <?= $form->field($model, 'n_w')->textInput() ?>

    <?= $form->field($model, 'b_lb')->textInput() ?>

    <?= $form->field($model, 'bowler')->textInput() ?>

    <?= $form->field($model, 'batsmen')->textInput() ?>

    <?= $form->field($model, 'wkeeper')->textInput() ?>

    <?= $form->field($model, 'feilder')->textInput() ?>

    <div class="">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

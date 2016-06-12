<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Matches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tournament')->textInput() ?>

    <?= $form->field($model, 'root')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scheduled_at')->textInput() ?>

    <?= $form->field($model, 'toss')->textInput() ?>

    <?= $form->field($model, 'batting_first')->textInput() ?>

    <?= $form->field($model, 'home_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_runs')->textInput() ?>

    <?= $form->field($model, 'home_balls')->textInput() ?>

    <?= $form->field($model, 'home_wks')->textInput() ?>

    <?= $form->field($model, 'away_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'away_runs')->textInput() ?>

    <?= $form->field($model, 'away_balls')->textInput() ?>

    <?= $form->field($model, 'away_wks')->textInput() ?>

    <?= $form->field($model, 'result')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'run_rate')->textInput() ?>

    <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'priority')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

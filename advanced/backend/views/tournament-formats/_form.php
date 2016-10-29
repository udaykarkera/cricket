<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\TournamentFormats */
/* @var $form yii\widgets\ActiveForm */
$formGroup = 'form-group';
$formControl = 'form-control';
$userModels = ['asd' => 'asd', 'asdad' => 'werqrr'];
?>

<div class="tournament-actual-format <?= $formGroup ?>">
    <?= Html::beginForm([''], 'post') ?>

    <?= Html::label('Total number of teams', 'TotalNoOfTeams', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'TotalNoOfTeams', '', ['class' => $formControl]) ?>

    <?= Html::label('Choose Stage type', 'FirstStageType', ['class' => 'control-label']) ?>
    <?= Html::dropDownList('list', '3', [ '2' => 'League', '3' => 'Knockout', '4' => 'Ladder', ], ['class' => $formControl]) ?>

    <?= Html::label('Stage Label', 'StageLabel', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'StageLabel', '', ['class' => $formControl]) ?>

    <?= Html::label('Number of Teams', 'NoOfTeams', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'NoOfTeams', '', ['class' => $formControl]) ?>

    <?= Html::label('Number of Groups', 'NoOfGroups', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'NoOfGroups', '', ['class' => $formControl]) ?>

    <?= Html::label('Number of teams each group', 'NoOfTeamsPerGroup', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'NoOfTeamsPerGroup', '', ['class' => $formControl]) ?>

    <?= Html::label('Number of Teams to Qualify', 'NoOfTeams', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'NoOfTeamsToQua', '', ['class' => $formControl]) ?>

    <?= Html::label('Number of Teams to Disqualify', 'NoOfTeams', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'NoOfTeamsToDis', '', ['class' => $formControl]) ?>

    <?= Html::label('Stage Position', 'StagePosition', ['class' => 'control-label']) ?>
    <?= Html::input('text', 'StagePos', '', ['class' => $formControl]) ?>

    <?= Html::button('Add Next Stage', ['class' => 'btn btn-primary control-label', 'id' => 'addStage']) ?>
    <?= Html::endForm() ?>
</div>

<div class="tournament-formats-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

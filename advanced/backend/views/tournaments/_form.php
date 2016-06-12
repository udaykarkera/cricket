<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Organisations;
use backend\models\Levels;
use backend\models\MatchFormats;
use backend\models\TournamentFormats;

/* @var $this yii\web\View */
/* @var $model backend\models\Tournaments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tournaments-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'tournament_format')->dropDownList(
        ArrayHelper::map(TournamentFormats::find()->all(), 'id', 'name'), ['options' => [3 => ['Selected' => 'selected']], 'prompt' => 'Select Level' ]
    ) ?>
    <?= Html::a('View Existing Formats Style', ['/tournament-formats/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Create New Format', ['/tournament-formats/create'], ['class'=>'btn btn-primary']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->dropDownList(
        ArrayHelper::map(Levels::find()->all(), 'id', 'name'), ['options' => [2 => ['Selected' => 'selected']], 'prompt' => 'Select Level' ]
    ) ?>

    <?= $form->field($model, 'match_format')->dropDownList(
        ArrayHelper::map(MatchFormats::find()->all(), 'id', 'name'), ['options' => [1 => ['Selected' => 'selected']], 'prompt' => 'Select Level' ]
    ) ?>

    <?= $form->field($model, 'organisation')->dropDownList(
        ArrayHelper::map(Organisations::find()->all(), 'id', 'name'),
        ['options' => [2 => ['Selected'=>'selected']], 'prompt' => 'Select Organisation']
    ) ?>

    <?= $form->field($model, 'year_count')->textInput(['value' => date('Y')]) ?>

    <?= $form->field($model, 'home_away')->dropDownList([ '1' => 'Yes', '0' => 'No', ], ['options' => [0 => ['Selected' => 'selected']], 'prompt' => 'Select']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['options' => ['active' => ['Selected' => 'selected']], 'prompt' => 'Select Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

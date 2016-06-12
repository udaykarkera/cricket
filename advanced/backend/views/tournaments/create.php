<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tournaments */

$this->title = 'Create Tournament';
$this->params['breadcrumbs'][] = ['label' => 'Tournaments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournaments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

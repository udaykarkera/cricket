<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use backend\models\TournamentFormatsSearch;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TournamentFormatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->registerCssFile("css/tournament-format.css");
$this->title = 'Tournament Formats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-formats-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tournament Formats', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column) {
                    $data['id'] = $model->id;
                    // $htmlSketch = '<p>Coming Soon..</p>';
                    // $htmlSketch = '<p id="rcorners1">Rounded corners!</p>';
                    $url = 'F:\xampp\htdocs\cricket\advanced\backend\web\tournament-json-formats\create-tournament-format-designs.php';
                    $handle = curl_init();
                    curl_setopt($handle, CURLOPT_URL, $url);
                    curl_setopt($handle, CURLOPT_POST, true);
                    curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
                    // curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);
                    // curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
                    // curl_setopt($handle, CURLOPT_PROTOCOLS, CURLPROTO_HTTPS);
                    // $htmlSketch = curl_exec($handle);
                    session_write_close();
                    $htmlSketch = curl_exec($handle);
                    curl_close($handle);
                    session_start();
                    return var_dump($htmlSketch);
                },
                'enableRowClick' => true,
                'expandTitle' => 'Open',
                'collapseTitle' => 'Close',
                'expandAllTitle' => 'Open All',
                'collapseAllTitle' => 'Close All',
                'expandOneOnly' => true,
            ],
            'name',
            'created_at',
            'updated_at',
            'status',
            // 'priority',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'export' => false,
    ]); ?>

</div>
<?php

namespace backend\controllers;

use Yii;

class ApcController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$id = 'apcCache';
		$value=Yii::$app->cache->get($id);
		if($value===false)
		{
			// regenerate $value because it is not found in cache
			// and save it in cache for later use:
			sleep(6);
			$value = 5666;
			Yii::$app->cache->set($id,$value);
		}
        return $this->render('index', 
        	['cache' => $value]
    	);
    }

    public function actionFlush()
    {
    	Yii::$app->cache->flush();
    }

}

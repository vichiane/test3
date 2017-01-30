<?php

namespace frontend\controllers;

class VicController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionVic(){
        echo 'ทดสอบ Vic';
        
    }

}

<?php

namespace frontend\controllers;
use frontend\models\Cars;

class PhpbasicsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCars(){
        $carList = Cars::find()->all();
        // var_dump($carslist);
        return $this->render('cars',[
            'carList'=>$carList
        ]);
    }
    

}

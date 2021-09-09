<?php
namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\FcpForm;
use yii;
class FcpController extends Controller
{

// public $layout='fcpLayout';
 public function actionHome()
 {
   $model=new FcpForm();
 	return $this->render('fcphome',['model'=>$model]);
 }

 public function actionGetData()
 {
    $model=new FcpForm();

    if($model->load(yii::$app->request->post()))
    {
      $res=$model->manipdata();

      if($res==true)
      {
        return $this->redirect('celebrityImages');
      }
      else
      {
        return $this->render('responseview');
      }

    }

    
 }


}




?>
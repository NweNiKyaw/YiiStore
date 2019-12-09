<?php

namespace backend\controllers;
use yii;
use backend\models\Categories;
use yii\filters\AccessControl;

class CategoriesController extends \yii\web\Controller
{
  public function behaviors()
    {
      return [
        'access'=>[
          'class'=>AccessControl::className(),
          'rules'=>[
            [
              'allow'=>true,
              'roles'=>['@']
            ]
          ]
        ]
      ];
    }

    public function actionIndex()
    {
      $cats = Categories::find()->all();
        return $this->render('index',['cats'=>$cats]);
    }

    public function actionCreate()
    {
      $cats = new Categories();
      if($cats -> load(Yii::$app->request->post())){
        if($cats -> save()){
          return $this-> redirect (['index','cats'=>$cats]);
        }
      }
      return $this->render ('create',['cats'=>$cats]);
    }

    public function actionDelete($id)
    {
      if(Categories::find()->where(['id'=>$id])->exists()){
        $cats = Categories::find()->where(['id'=>$id])->one();
        if($cats->delete()){
          return $this->redirect(['index']);
        }
      }
    }

    public function actionUpdate($id)
    {
      $cats = Categories::findOne(['id'=>$id]);
      if($cats -> load(Yii::$app->request->post())){
        if($cats->save()){
          return $this->redirect(['index']);
        }
      }
      return $this->render('update', ['cats'=>$cats]);
    }

}

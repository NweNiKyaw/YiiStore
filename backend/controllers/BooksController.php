<?php

namespace backend\controllers;
use yii;
use backend\models\Books;
use backend\models\Categories;
use backend\models\Orders;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

class BooksController extends \yii\web\Controller
{
  // public function behaviors()
  //   {
  //     return [
  //       'access'=>[
  //         'class'=>AccessControl::className(),
  //         'rules'=>[
  //           [
  //             'allow'=>true,
  //             'roles'=>['@']
  //           ]
  //         ]
  //       ]
  //     ];
  //   }

    public function actionIndex()
    {
      $books = Books::find()->all();
        return $this->render('index',['books'=>$books]);
    }

    public function actionCreate()
    {
      $books = new Books();
      $model = false;
      if($books -> load(Yii::$app->request->post())){
        $cover = UploadedFile::getInstance ($books, 'cover');
        $cover -> saveAs ('img/'. $cover -> baseName. '.'. $cover -> extension);
        $books -> cover = $cover->basename. '.'. $cover->extension;
        if($books -> save()){
          return $this-> redirect (['index','books'=>$books]);
        }
      }
      return $this->render ('create',['books'=>$books]);
    }

    public function actionDelete($id)
    {
      if(Books::find()->where(['id'=>$id])->exists()){
        $posts = Books::find()->where(['id'=>$id])->one();
        if($posts->delete()){
          return $this->redirect(['index']);
        }
      }
    }

    public function actionUpdate($id)
    {
      $books = Books::findOne(['id'=>$id]);
      if($books -> load(Yii::$app->request->post())){
        $cover = UploadedFile::getInstance ($books, 'cover');
        $cover -> saveAs ('img/'. $cover -> baseName. '.'. $cover -> extension);
        $books -> cover = $cover->basename. '.'. $cover->extension;
        if($books->save()){
          return $this->redirect(['index']);
        }
      }
      return $this->render('update', ['books'=>$books]);
    }

    public function actionOrders()
    {
      $orders = Orders::find()->all();
      return $this->render('orders',['orders'=>$orders]);
    }

}

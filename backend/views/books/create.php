<?php

  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;
  use backend\models\Books;

 ?>

 <div class="menu">
   <h1>Book New</h1>
   <ul class="book">
     <li><a href="<?= Url::to(['/books/index'])?>">Manage Books</a> </li>
     <li><a href="<?= Url::to(['/categories/index'])?>">Manage Categories</a> </li>
     <li><a href="<?= Url::to(['/books/orders'])?>">Manage Orders</a> </li>
   </ul>
   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form -> field($books, 'title') -> textInput()?>
    <?= $form -> field($books, 'author') -> textInput()?>
    <?= $form -> field($books, 'summary') -> textarea(['class' => 'area','rows' => '6','cols' => '39'])?>
    <?= $form -> field($books, 'price') -> textInput()?>
    <?= $form -> field($books, 'category_id') -> dropDownList([1=>'Technology',2=>'Internet',3=>'Mobile',4=>'Magazine',5=>'Science',6=>'Computer'],['prompt'=>'--Choose--'],['style' => 'width:100px']);?>
    <?= $form -> field($books, 'cover') -> fileInput()?>

    <?= Html::submitButton('Add Book',['class' => 'new'])?>
    <a href="<?= Url::to(['index'])?>">Back</a>
   <?php $form = ActiveForm::end() ?>
   <br>
 </div>

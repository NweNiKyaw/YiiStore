<?php

  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;

 ?>

 <div class="menu">
   <h1>Update Book</h1>
   <ul class="book">
     <li><a href="<?= Url::to(['/books/index'])?>">Manage Books</a> </li>
     <li><a href="<?= Url::to(['/categories/index'])?>">Manage Categories</a> </li>
     <li><a href="<?= Url::to(['/books/orders'])?>">Manage Orders</a> </li>
   </ul>
   <?php $form = ActiveForm::begin() ?>
    <?= $form -> field($books, 'title') -> textInput()?>
    <?= $form -> field($books, 'author') -> textInput()?>
    <?= $form -> field($books, 'summary') -> textarea(['class' => 'area','rows' => '6', 'cols' => '40'])?>
    <?= $form -> field($books, 'price') -> textInput()?>
    <?= $form -> field($books, 'category_id') -> dropDownList([1=>'Technology',2=>'Internet',3=>'Mobile',4=>'Magazine',5=>'Science',6=>'Computer'],['prompt'=>'--Choose--'],['class' => 'select'])?>
    <?= $form -> field($books, 'cover') -> fileInput()?>
    <?= Html::submitButton('Update Book',['class' => 'new'])?>
    <a href="<?= Url::to(['index'])?>">Back</a>
   <?php $form = ActiveForm::end() ?>
   <br>
 </div>

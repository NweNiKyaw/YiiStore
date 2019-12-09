<?php

  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;

 ?>

 <div class="menu">
   <h1>Update Category</h1>
   <ul class="book">
     <li><a href="<?= Url::to(['/books/index'])?>">Manage Books</a> </li>
     <li><a href="<?= Url::to(['/categories/index'])?>">Manage Categories</a> </li>
     <li><a href="<?= Url::to(['/books/orders'])?>">Manage Orders</a> </li>
   </ul>
   <?php $form = ActiveForm::begin() ?>
    <?= $form -> field($cats, 'name') -> textInput()?>
    <?= $form -> field($cats, 'remark') -> textarea(['class' => 'area','rows' => '6', 'cols' => '40'])?>
    <?= Html::submitButton('Update Category',['class' => 'new'])?>
   <?php $form = ActiveForm::end() ?>
   <br>
 </div>

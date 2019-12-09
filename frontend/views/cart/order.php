<?php
  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;

 ?>
 <div class="menu">
     <h1>Order Form</h1>
     <div class="sidebar">
         <ul class="cats">
           &laquo; <?= Html::a('Continue Shoppiing', ['site/index'])?> <br>
           &times;  <?= Html::a('Clear Cart',['clear'],['class' => 'del'])?>
         </ul>
     </div>
     <div class="main">
       <div class="order-form">
         <h2>Order Now</h2>
         <?php $form = ActiveForm::begin() ?>
          <?= $form -> field($orders, 'name') -> textInput()?>
          <?= $form -> field($orders, 'email') -> textInput()?>
          <?= $form -> field($orders, 'phone') -> textInput()?>
          <?= $form -> field($orders, 'address') -> textarea()?>
          <?= Html::submitButton('Submit Order',['class' => 'btn btn-primary'])?>
          <!-- <a href="<?php //= Url::to(['site/index'])?>">Continue Shopping</a> -->
         <?php $form = ActiveForm::end() ?>
       </div>
     </div>
     <div class="footer">
       &copy; <?= date("Y")?> . All right reserved
     </div>

 </div>

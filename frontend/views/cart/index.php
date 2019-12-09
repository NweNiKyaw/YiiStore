<?php
  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;

  $this -> title = "View Cart";
?>
<div class="menu">
  <h1>View Cart</h1>
    <div class="sidebar">
        <ul class="cats">
          &laquo; <?= Html::a('Continue Shoppiing', ['site/index'])?> <br>
          &times;  <?= Html::a('Clear Cart',['clear'],['class' => 'del'])?>
        </ul>
    </div>
    <?php if(!empty(Yii::$app->session['cart'])){ ?>
      <?php $form = ActiveForm::begin() ?>
      <div class="main">
        <table>
          <thead>
            <tr>
              <th>Book title</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(Yii::$app->session['cart'] as $id => $qty){
              $product = $this -> context -> findProduct($id);
              ?>
            <tr>
              <td><?= $product -> title?></td>
              <td><?= Html::textInput($id, $qty, ['class' => 'form-control', 'size' => 1, 'maxlength' => 2 ])?></td>
              <td>$<?= $product -> price?></td>
              <td>$<?= $product -> price*$qty?></td>
            </tr>
          <?php } ?>
          <tr>
            <td>Total:</td>
            <td><?= $totalItems ?></td>
            <td></td>
            <td>$<?= $totalPrice?></td>
          </tr>
          </tbody>
        </table>
        <div class="pull-right">
          <?= Html::submitButton('Add Qty',['class' => 'btn btn-warning btn-lg'])?>
          <?= Html::a('Order Now', ['/cart/order'],['class' => 'btn btn-success btn-lg'])?>
        </div>
      </div>
      <?php ActiveForm::end() ?>
    <?php } ?>
    <div class="footer">
      &copy; <?= date("Y")?> . All right reserved
    </div>
</div>

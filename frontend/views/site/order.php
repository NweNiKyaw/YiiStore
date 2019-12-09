<?php
  use yii\helpers\Html;
  use yii\helpers\Url;;

  $this->title = "Order Submitted";
?>
<div class="menu">
  <h1>Order Submitted</h1>
    <div class="msg">
      Your order has been submitted. We'll deliver the items soon. <a href="<?= Url::to(['index'])?>" class="done">Book Store Home</a>
    </div>
    <div class="footer">
      &copy; <?= date("Y")?>. All right reserved.
    </div>
  </div>
</div>

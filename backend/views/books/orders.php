<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Orders List';
 ?>
<div class="menu">
  <h1>Orders List</h1>
  <ul class="book">
    <li><a href="<?= Url::to(['/books/index'])?>">Manage Books</a> </li>
    <li><a href="<?= Url::to(['/categories/index'])?>">Manage Categories</a> </li>
    <li><a href="<?= Url::to(['/books/orders'])?>">Manage Orders</a> </li>
  </ul>
  <ul class = "orders">
    <?php foreach ($orders as $order) { ?>
      <?php if($order['status']){ ?>
        <li class="delivered">
      <?php } else { ?>
        <li>
      <?php } ?>
      <div class="order">
        <b><?= $order -> name?></b>
        <i><?= $order -> email?></i>
        <span><?= $order -> phone?></span>
        <p><?= $order -> address?></p>
        <?php if($order['status']){ ?>
          * <a href="<?= Url::to(['#'])?>">Undo</a>
        <?php } else { ?>
          # <a href="#">Mark as Delivered</a>
        <?php } ?>
      </div>
    <?php } ?>
  </ul>
</div>

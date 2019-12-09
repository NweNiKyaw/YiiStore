<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Books;

$this->title = 'My Yii Book Store Project';

?>
<div class="menu">
  <h1>Book Store</h1>
        <div class="sidebar">
          <ul class="cats">
            <li>
              <b><a href="<?= Url::to(['index'])?>">All Categories</a></b>
            </li>
            <?php foreach($cats as $cat){ ?>
                <li> <a href="<?= Url::to(['site/category','id' => $cat->id])?>"><?= $cat -> name?></a> </li>
            <?php } ?>
          </ul>
        </div>
        <div class="main">
          <ul class="books">
            <?php foreach($books as $book){ ?>
              <li>
                <?= Html::img ((Url::to ('@web/img/'.$book -> cover)),['height' => '140'])?>
                <b> <a href="<?= Url::to(['site/detail', 'id' => $book -> id])?>"><?= $book -> title?></a> </b>
                <i>$ <?= $book -> price?></i>
                <?= Html::a('Add to Cart',['cart/add','id'=>$book -> id],['class' => 'add-to-cart'])?>
              </li>
            <?php } ?>
          </ul>
        </div>
    <div class="footer">
      &copy; <?php echo date("Y")?>. All right reserved.
    </div>
</div>

<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Books;
use yii\web\Session;


 $cart = 0;
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
<!-- <div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div> -->

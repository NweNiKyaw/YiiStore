<?php
  use yii\helpers\Html;
  use yii\helpers\Url;

 ?>
 <div class="menu">
   <h1>Book Detail</h1>
      <div class="detail">
        <a href="<?= Url::to(['index'])?>" class="back">&laquo; Go Back</a>
        <?= Html::img ((Url::to ('@web/img/'.$books -> cover)),['height' => '140'])?>
        <h2><?= $books -> title?></h2>
        <i>by <?= $books -> author?></i>
        <b>$ <?= $books -> price?></b>
        <p><?= $books -> summary?></p>
        <?= Html::a('Add to Cart',['cart/add','id'=>$books -> id],['class' => 'add-to-cart'])?>
      </div>
      <div class="footer">
        &copy; <?= date("Y")?>. All right reserved.
      </div>
  </div>

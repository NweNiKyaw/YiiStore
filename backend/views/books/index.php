<?php
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Books;
use backend\models\Categories;

$this->title = 'Book List';
 ?>
  <div class="menu">
    <h1>Book List</h1>
    <ul class="book">
      <li><a href="<?= Url::to(['/books/index'])?>">Manage Books</a> </li>
      <li><a href="<?= Url::to(['/categories/index'])?>">Manage Categories</a> </li>
      <li><a href="<?= Url::to(['/books/orders'])?>">Manage Orders</a> </li>
    </ul>

    <ul class="list">
      <?php foreach ($books as $book) { ?>
        <li>
          <?= Html::img ((Url::to ('@web/img/'.$book -> cover)),['class' => '', 'alt' => 'cover', 'align' => 'right', 'height' => '150' ])?>
          <b><?= $book -> title?></b>
          <i>by <?= $book -> author?></i>
          <small> ( in <?= $book -> category -> name ?> )</small>
          <span> $ <?= $book -> price?></span>
          <div>
            <?= $book -> summary?>
          </div>
          <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          [<a href="<?= Url::to(['update','id'=>$book->id])?>">Edit</a> ]
          [<a href="<?= Url::to(['delete','id'=>$book->id])?>" class="del">Delete</a>]
        </li>
      <?php } ?>
    </ul>
  <?= Html::a('Book New',['/books/create'],['class' => 'new'])?>
  </div>

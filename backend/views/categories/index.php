<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Category List';
 ?>
 <div class="menu">
   <h1>Category List</h1>
   <ul class="book">
     <li><a href="<?= Url::to(['/books/index'])?>">Manage Books</a> </li>
     <li><a href="<?= Url::to(['/categories/index'])?>">Manage Categories</a> </li>
     <li><a href="<?= Url::to(['/books/orders'])?>">Manage Orders</a> </li>
   </ul>

     <ul>
       <?php foreach ($cats as $cat) { ?>
         <li>[<a href="<?= Url::to(['update','id'=>$cat->id])?>">Edit</a>] | [<a href="<?= Url::to(['delete','id'=>$cat->id])?>" class="text-danger">Del</a>] <?= $cat->name?></li>
       <?php } ?>
     </ul>
<?= Html::a('New Category',['/categories/create'],['class' => 'new'])?>
 </div>

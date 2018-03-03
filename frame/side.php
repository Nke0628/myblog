<?php
//クラスファイル呼び出し
require_once(__DIR__.'/../library/Article.php');
 ?>

<aside>

<form  class="search" method="get" action="../main/search.php">
<input class="search_form" type="text" name="text"　placeholder="search for">
<input class="search_img" type="image" name="submit" src="../images/search.png">
</form>

<div class="recent_post">
<h3>
Recent Post
</h3>
<?php
$article=new Article();
$article->recent_disp_article();
?>
</div>

<div class="category_post">
<h3>
Category
</h3>
<?php
$article->disp_category();
?>
</div>

<div class="archive_post">
<h3>
Arcive
</h3>
<?php
$article->disp_archive();
 ?>
</div>

</aside>

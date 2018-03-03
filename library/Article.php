<?php

//-- クラス呼び出し
require_once(__DIR__.'/../library/DbConnect.php');

class  Article
{
	//1ページ当たりの表示件数
	const disp=5;
	//最近の投稿の表示件数
	const recently_disp=5;



//ページング機能
function  paging($sql)
{
	//dbクラスインスタンス作成
	$db= new DbConnect();

	//データ総件数抽出
	$count=$db->select_one($sql);

	//ページ数の決定
	$page=ceil($count['total']/ self::disp);

    //現在のページを取得
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	$next=$now+1;
	$prev=$now-1;

	//最初のページ以外では前へを表示
	if($now!=1)
	{
		echo '<div class="paging_prev">';
		echo '<a href="?page='.$prev.'">＜BACK</a> ';
		echo '</div>';
	}

	//ページ数表示
	//foreach (range(1,$page) as $val)
	//{
		//echo '<a href="?page='.$val.'">'.$val.'</a> ';
	//}

	//最終ページではない場合、次へを表示
	if($now<$page)
	{
		echo '<div class="paging_next">';
		echo '<a href="?page='.$next.'">NEXT＞</a> ';
		echo '</div>';
	}
}



//検索時のページング機能
function  search_paging($sql)
{

	//dbクラスインスタンス作成
	$db= new DbConnect();

	//データ総件数抽出
	$count=$db->select_one($sql);

	//ページ数の決定
	$pagedate=ceil($count['total']/ self::disp);


	//現在のページを取得
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	$next=$now+1;
	$prev=$now-1;

	$text=$_GET['text'];

	//CSS用にブロック化
	echo '<div class="paging">';

	//最初のページ以外では前へを表示
	if($now!=1)
	{
		echo '<a href="?page='.$prev.' &text='.$text.'">＜前のページ</a> ';
	}

	//ページ数表示
	//foreach (range(1,$pagedate) as $val)
	//{
		//echo '<a href="?page='.$val.' &text='.$text.'">'.$val.'</a> ';
	//}

	//最終ページではない場合、次へを表示
	if($now<$pagedate)
	{
		echo '<a href="?page='.$next.' &text='.$text.'">次のページ＞</a> ';
	}

	//CSS用にブロック化
	echo '</div>';
}



//カテゴリーのページング機能
function  category_paging($sql)
{

	//dbクラスインスタンス作成
	$db= new DbConnect();

	//データ総件数抽出
	$count=$db->select_one($sql);

	//ページ数の決定
	$pagedate=ceil($count['total']/ self::disp);


	//現在のページを取得
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	$next=$now+1;
	$prev=$now-1;

	$category_id=$_GET['category_id'];

	//最初のページ以外では前へを表示
	if($now!=1)
	{
		echo '<div class="paging_prev">';
		echo '<a href="?page='.$prev.' &category_id='.$category_id.'">＜前のページ</a> ';
		echo '</div>';
	}

	//ページ数表示
	//foreach (range(1,$pagedate) as $val)
	//{
		//echo '<a href="?page='.$val.' &text='.$text.'">'.$val.'</a> ';
	//}

	//最終ページではない場合、次へを表示
	if($now<$pagedate)
	{
		echo '<div class="paging_next">';
		echo '<a href="?page='.$next.' &category_id='.$category_id.'">次のページ＞</a> ';
		echo '</div>';
	}
}


//archiveページング機能
function  archive_paging($sql)
{

	//dbクラスインスタンス作成
	$db= new DbConnect();

	//データ総件数抽出
	$count=$db->select_one($sql);

	//ページ数の決定
	$pagedate=ceil($count['total']/ self::disp);


	//現在のページを取得
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	$next=$now+1;
	$prev=$now-1;

	$YM=$_GET['archive'];

	//最初のページ以外では前へを表示
	if($now!=1)
	{
		echo '<div class="paging_prev">';
		echo '<a href="?page='.$prev.' &archive='.$YM.'">BACK</a> ';
		echo '</div>';
	}

	//ページ数表示
	//foreach (range(1,$pagedate) as $val)
	//{
		//echo '<a href="?page='.$val.' &text='.$text.'">'.$val.'</a> ';
	//}

	//最終ページではない場合、次へを表示
	if($now<$pagedate)
	{
		echo '<div class="paging_next">';
		echo '<a href="?page='.$next.' &archive='.$YM.'">NEXT</a> ';
		echo '</div>';
	}
}


//トップ画面の投稿表示機能
function disp_article()
{
	//現在のページを取得(取得できない場合は1ページとする)
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	//offsetの設定
	$offset=($now-1)*5;


	//dbクラスのインスタンス
	$db=new DbConnect();
	$sql='select * from article limit '.$offset.','.self::disp.'';
	$rec=$db->select_all($sql);


	foreach($rec as $key=>$val)
	{
		echo '<div class="main_article">'."\n";
		echo '<div class="article_title"><a href="../article/'.$val['file_name'].'">'.$val['title'].'</a></div>'."\n";
		echo '<a href="../article/'.$val['file_name'].'">'."\n";
		echo '<img src="../images/'.$val['pic'].'">'."\n";
		echo '</a>'."\n";
		echo '<div class="article_text">'."\n";
		echo $val['text']."\n";
		echo '</div>'."\n";
		echo '<div class="more"><a href="../article/'.$val['file_name'].'">more</a></div>'."\n";
		echo '</div>'."\n";
	}
}



//検索時の投稿表示機能
public function disp_search_article($title)
{
	//現在のページを取得(取得できない場合は1ページとする)
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	//offsetの設定
	$offset=($now-1)*5;

	//dbクラスのインスタンス
	$db=new DbConnect();
	$sql="select * from article where title like '%{$title}%'"."limit {$offset},".self::disp;
	$rec=$db->select_all($sql);

	//foreach($rec as $key=>$val)
	//{
		//echo '<a href="../article/'.$val['file_name'].'">'.$val['title'].'</a><br><br>';
	//}

	foreach($rec as $key=>$val)
	{
		echo '<div class="main_article">';
		echo '<div class="article_title"><a href="../article/'.$val['file_name'].'">'.$val['title'].'</a></div>';
		echo '<a href="../article/'.$val['file_name'].'">';
		echo '<img src="../images/'.$val['pic'].'">';
		echo '</a>';
		echo '<div class="article_text">';
		echo $val['text'];
		echo '</div>';
		echo '<div class="more"><a href="../article/'.$val['file_name'].'">more</a></div>';
		echo '</div>';
	}
}



//カテゴリー投稿表示
public function disp_category_article($title)
{
	//現在のページを取得(取得できない場合は1ページとする)
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	//offsetの設定
	$offset=($now-1)*5;

	//dbクラスのインスタンス
	$db=new DbConnect();
	$sql="select * from article where category='{$title}'"."limit {$offset},".self::disp;
	$rec=$db->select_all($sql);

	//foreach($rec as $key=>$val)
	//{
		//echo '<a href="../article/'.$val['file_name'].'">'.$val['title'].'</a><br><br>';
	//}

	foreach($rec as $key=>$val)
	{
		echo '<div class="main_article">';
		echo '<div class="article_title"><a href="../article/'.$val['file_name'].'">'.$val['title'].'</a></div>';
		echo '<a href="../article/'.$val['file_name'].'">';
		echo '<img src="../images/'.$val['pic'].'">';
		echo '</a>';
		echo '<div class="article_text">';
		echo $val['text'];
		echo '</div>';
		echo '<div class="more"><a href="../article/'.$val['file_name'].'">more</a></div>';
		echo '</div>';
	}
}



//archive投稿表示
public function disp_archive_article($title)
{
	//現在のページを取得(取得できない場合は1ページとする)
	if(!isset($_GET['page']))
	{
		$now=1;
	}
	else
	{
		$now=$_GET['page'];
	}

	//offsetの設定
	$offset=($now-1)*5;

	//dbクラスのインスタンス
	$db=new DbConnect();
	$sql="select * from article where date_format(create_date,'%Y%m')='{$title}'"."limit {$offset},".self::disp;
	$rec=$db->select_all($sql);

	//foreach($rec as $key=>$val)
	//{
		//echo '<a href="../article/'.$val['file_name'].'">'.$val['title'].'</a><br><br>';
	//}

	foreach($rec as $key=>$val)
	{
		echo '<div class="main_article">';
		echo '<div class="article_title"><a href="../article/'.$val['file_name'].'">'.$val['title'].'</a></div>';
		echo '<a href="../article/'.$val['file_name'].'">';
		echo '<img src="../images/'.$val['pic'].'">';
		echo '</a>';
		echo '<div class="article_text">';
		echo $val['text'];
		echo '</div>';
		echo '<div class="more"><a href="../article/'.$val['file_name'].'">more</a></div>';
		echo '</div>';
	}
}



//最近の投稿表示用機能
public function recent_disp_article()
{
	//dbクラスのインスタンス
	$db=new DbConnect();
	$sql="select file_name,title from article order by create_date desc limit 0,".self::recently_disp ;
	$rec=$db->select_all($sql);


	foreach($rec as $key=>$val)
	{
		echo '<p>';
		echo '<a href="../article/'.$val['file_name'].'">'.$val['title'].'</a><br><br>';
		echo '</p>';
	}
}



//アーカイブ表示機能
public function disp_archive(){
	$db=new DbConnect();
	$sql="SELECT DISTINCT date_format(create_date,'%Y%m') AS YM,count(*) AS article_su FROM article
				group by  date_format(create_date,'%Y%m') order by date_format(create_date,'%Y%m') desc";
	$rec=$db->select_all($sql);
	foreach ($rec as $kye=>$val) {
		echo '<p>';
		echo '<a href="../main/archive.php?archive='.$val['YM'].'">'.$val['YM'].'('.$val['article_su'].')'.'</a><br><br>';
		echo '</p>';
	}
}



//カテゴリ表示機能
public function disp_category(){
	$db=new DbConnect();
	$sql="SELECT DISTINCT category_name,category_id
				FROM article AS AT
				INNER JOIN m_category MC
				ON AT.category=MC.category_id
				ORDER BY category_id";
	$rec=$db->select_all($sql);
	foreach ($rec as $key => $val) {
		echo'<p>';
		echo'<a href="../main/category.php?category_id='.$val['category_id'].'">'.$val['category_name'].'</a><br><br>';
		echo'</p>';
	}
}
}

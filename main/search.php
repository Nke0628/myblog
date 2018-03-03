<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ONLYSUBWAY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
</head>

<body>

<!-- クラス呼び出し -->
<?php require_once(__DIR__.'/../library/DbConnect.php');?>
<?php require_once(__DIR__.'/../library/Article.php');?>

<!-- ヘッダー部分 -->
<?php include(__DIR__.'/../frame/header.html');?>

<!--グローバルナビゲーション部分-->
<?php include(__DIR__.'/../frame/nav.html');?>

<div class="main">
	<article>
    	<?php

    	$text=$_GET['text'];
    	$text=htmlspecialchars($text,ENT_QUOTES,'utf-8');
    	$page=new Article();
    	$sql="select count(*) as total from article where text like '%{$text}%'";
    	$page->disp_search_article($text);
			$page->search_paging($sql);
    	?>

	</article>

	<!--サイドメニュー部分-->
	<?php include(__DIR__.'/../frame/side.php');?>
</div>

<!--フッター部分-->
<?php include(__DIR__.'/../frame/footer.html');?>

</body>
</html>

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
<?php require_once('../library/DbConnect.php');?>
<?php require_once('../library/Article.php');?>

<!-- ヘッダー部分 -->
<?php include('../frame/header.html');?>

<!--グローバルナビゲーション部分-->
<?php include('../frame/nav.html');?>

<div class="main">
	<article>
    	<?php

    	$ym=$_GET['archive'];
    	$page=new Article();
    	$sql="select count(*) as total from article where date_format(create_date,'%Y%m')='{$ym}'";
    	$page->disp_archive_article($ym);
		  $page->archive_paging($sql);
    	?>

	</article>

	<!--サイドメニュー部分-->
	<?php include('../frame/side.php');?>
</div>

<!--フッター部分-->
<?php include('../frame/footer.html');?>

</body>
</html>

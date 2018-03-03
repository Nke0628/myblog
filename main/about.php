<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>badger</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
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

<div id="about">
<div class="profile">
<p>当ブログは自分用の備忘録やアウトプットの場として作成しました。<br>
	 主にWEBに関する記事を書いています。<br>
	 PHP・HTML・CSS等
	 <br>
	 <br>

</p>
</div>
</div>

<!--フッター部分-->
<?php include(__DIR__.'/../frame/footer.html');?>

</body>
</html>

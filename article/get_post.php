<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>badger</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://alexgorbatchev.com/pub/sh/current/styles/shCoreDefault.css"/>
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>
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

<h1>GET/POSTとは</h1>

<p>GET</p>
<p>http requestに付属してパラーメータを送る</p>

</article>

	<!--サイドメニュー部分-->
	<?php include(__DIR__.'/../frame/side.php');?>
</div>

<!--フッター部分-->
<?php include(__DIR__.'/../frame/footer.html');?>

</body>
</html>

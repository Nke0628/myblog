<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>badger</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</script>
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

<div class="faq-wrapper">
	<div class="faq-container">
		<div class="faq-heading">
			<h3>ABOUT　ME</h3>
		</div>
			<ul id="faq-list">
				<li class="faq-list-item">年齢は？
				<div class="answer">27歳です。あと少しで28歳になります。</div>
				</li>
				<li class="faq-list-item">職業は？
				<div class="answer">社内SEをしています。</div>
				</li>
				<li class="faq-list-item">普段どんな仕事しているの？
				<div class="answer">会社で使用しているシステムの問い合わせ対応がメインです。</div>
				</li>
				<li class="faq-list-item">このブログは何？
				<div class="answer">WEBエンジニアになるための記録として始めました。</div>
				</li>
		</div>
 </div>
</div>

<!--フッター部分-->
<?php include(__DIR__.'/../frame/footer.html');?>
<script src="../css/about.js">
</script>
</body>
</html>

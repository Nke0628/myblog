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
<?php require_once('../library/Article.php');?>

<!-- ヘッダー部分 -->
<?php include(__DIR__.'/../frame/header.html');?>

<!--グローバルナビゲーション部分-->
<?php include(__DIR__.'/../frame/nav.html');?>

<div class="main">
<article>
<div class="article_detail">

<h1 class="article_detail_title">ブログにソ-スコ-ドを綺麗に載せる方法</h1>

<p class="article_detail_text">
ブログにソースコードを綺麗に表示した場合はjavascriptのライブラリでもあるSyntaxHighlighterを表示します。
これを使用すると以下のようなハイライトで表示することができます。
</p>

<pre class="brush:css">
body{
    color:#fff;
    background-color:#000;
    font-size:1em;
}
</pre>

<h3 class="article_detail_highlight">STEP1 SyntaxHighlighterの導入</h3>

<p class="article_detail_text">
まずはCSSとjavascriptのコアスクリプトを＜head＞タグ内に読み込みます。
</p>

<pre class="brush:js">
	<link rel="stylesheet" type="text/css" href="http://alexgorbatchev.com/pub/sh/current/styles/shCoreDefault.css"/>
	<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
</pre>

<h3 class="article_detail_highlight">STEP2 表示したい言語毎のスクリプトを読込</h3>

<p class="article_detail_text">
STEP１で記載したコードのすぐ下に表示したい言語のスクリプトを読み込みます。
今回はjavascriptを表示する場合のjsファイルにします。
</p>

<pre class="brush:js">
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js"></script>
</pre>

<h3 class="article_detail_highlight">STEP3 実行処理を追加する</h3>

<p class="article_detail_text">
上記のSTEPを記載したら最後に実行用のスクリプトを読み込みます。
</p>

<pre class="brush:js">
<script type="text/javascript">SyntaxHighlighter.all();</script>
</pre>

<h3 class="article_detail_highlight">STEP4 使用方法</h3>

<p class="article_detail_text">
まずは表示したいコードを＜pre＞タグで囲います。
そしてclassを指定します。
このclass名は言語毎に変わります。
イメージは以下の通りです。
</p>

<pre class="brush:js">
<pre class="brush:js">
	<script type="text/javascript">
	$(function(){
	    var text = $('#comment').text();

	    text = text.replace(/ +/, '');
	    alert(text);
	});
	</script>
</pre>
</pre>

<h3 class="article_detail_highlight">STEP4 まとめ</h3>

<p class="article_detail_text">
以上で終了になります。
上記の方法で行うことで見やすいソースコードを表示することができます！
</p>

</div>
</article>

	<!--サイドメニュー部分-->
	<?php include(__DIR__.'/../frame/side.php');?>
</div>

<!--フッター部分-->
<?php include(__DIR__.'/../frame/footer.html');?>

</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>badger</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://alexgorbatchev.com/pub/sh/current/styles/shCoreRDark.css"/>
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
<div class="article_detail">

<h1 class="article_detail_title">初めてGitとGitHubを使ってみる</h1>

<p class="article_detail_text">
プログラミングをしているとよくGitとかGitHubという言葉をよく聞きます。<br>
バージョン管理とか何とか便利そうなのでとりあえず使ってみることに。<br>
色々サイトをみたり調べてみてやっと使い方がわかってきたのでその記録。<br><br>

Git<br>
バージョン管理ツール　変更履歴等を管理でき、ローカル環境でも使用可<br><br>
GitHub<br>
Gitで管理しているソースをクラウド上で保存したり公開することができる<br><br>

使用イメージは以下の通りです。<br>
1.Gitをダウンロード<br>
2.Gitの初期設定<br>
3.管理したいフォルダをGitと紐付ける<br>
4.ソースコードをローカルリポジトリにコミット<br>
5.GitHubのアカウント作成<br>
6.GitHubでリモートリポジトリを作成<br>
7.ローカルリポジトリをリモートリポジトリに登録<br>
</p>

<h3 class="article_detail_highlight">Gitをダウンロード</h3>
<p class="article_detail_text">
まずGitをダウンロードします。<br>
<a href="https://git-scm.com/" target="_blank">https://git-scm.com/</a><br>
それぞれのOSに合わせてダウンロードしてください。
</p>


<h3 class="article_detail_highlight">Gitの初期設定</h3>
<p class="article_detail_text">
Gitはコンソール上でコマンドを叩いて使用します。<br>
Gitが正しくインストールされているか確認します。
下記コマンドでバージョン情報がでてきたらOKです。
</p>
<pre class="brush:js">
$ git --version
git version 1.8.3.1
</pre>
<p class="article_detail_text">
次に名前とメールアドレスを登録します。
</p>
<pre class="brush:js">
$ git config --global user.name "ユーザ名"
$ git config --global user.email "メールアドレス"
</pre>
<p class="article_detail_text">
gitの出力のカラーリング設定
</p>
<pre class="brush:js">
$ git config --global color.ui auto
</pre>


<h3 class="article_detail_highlight">管理したいフォルダをGitと紐付ける</h3>
<p class="article_detail_text">
管理したいソースコードのあるフォルダまで移動します。
移動したらそのフォルダを下記コマンドでGitリポジトリに設定します。
</p>
<pre class="brush:js">
$ git init
Initialized empty Git repository in /Users/yourname/Desktop/tutorial/.git/
</pre>

<h3 class="article_detail_highlight">ソースコードをローカルリポジトリにコミット</h3>
<p class="article_detail_text">
ソースコードをローカルリポジトリにコミットする前にインデックスに登録する必要があります。
下記コマンドでフォルダ内のすべてのファイルがインデックスに登録されます。
</p>
<pre class="brush:js">
$ git add -A
</pre>
<p class="article_detail_text">
次にインデックスに登録した内容をローカルリポジトリにコミットします。
</p>
<pre class="brush:js">
$ git commit -m "ログに残すコメントを入力"
</pre>
<p class="article_detail_text">
コミット履歴はログとして見ることができます。
</p>
<pre class="brush:js">
$git log
commit db29e53a521f1a7fc1cbe0ec3736f62c5bb4ee11
Author: rjerjeirj <----@yahoo.co.jp>
Date:   Sun Mar 4 09:28:30 2018 +0900

    CSS change
</pre>

<h3 class="article_detail_highlight">GitHubのアカウント作成</h3>
<p class="article_detail_text">
次にGitHubでアカウントを作成します。<br>
<a href="https://github.com/" target="_blank">https://github.com/</a><br>
</p>

<h3 class="article_detail_highlight">GitHubでリモートリポジトリを作成</h3>
<p class="article_detail_text">
アカウントを作成したらGitHub画面でリモートリポジトリを作成します。
</p>
<img class="article_detail_img" src="/images/GitHub_start.png">
<p class="article_detail_text">
プロジェクト名や説明文を入力します。<br>
READMEにチェックをいれた場合はDescriptionに記載した内容のテキストファイルが同時に作成されます。
</p>
<img class="article_detail_img" src="/images/GitHub_newproject.png">
<p class="article_detail_text">
作成が完了したら、URLが表示されるので覚えておいてください。
</p>

<h3 class="article_detail_highlight">ローカルリポジトリをリモートリポジトリに登録</h3>
<p class="article_detail_text">
ここまできたら最後にローカルリポジトリに登録している内容を先程作成した、リモートリポジトリに登録していきます。
まずはリモートリポジトリに接続します。
</p>
<pre class="brush:js">
$ git remote add origin https://github.com/（ユーザー名）/（リポジトリ名)
</pre>
<p class="article_detail_text">
次にローカルリポジトリをPUSHします。
</p>
<pre class="brush:js">
$ git push origin master
</pre>
<p class="article_detail_text">
この時の僕の場合はエラーがかかりました。
色々調べるとおそらくREADMEファイルが原因ということが判明したので下記コマンドを流します。
</p>
<pre class="brush:js">
$ git fetch && git merge origin/master
</pre>
<p class="article_detail_text">
もう一度PUSHすると無事成功しました！
</p>

<h3 class="article_detail_highlight">最後に</h3>
<p class="article_detail_text">
ここまで色々作業しました、これを使うとより管理が楽にできそうという印象です。
ただ他にも色々機能があるそうなので、それはまた別の記事にできたらと思います。
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

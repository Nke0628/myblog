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


<button>もっとよむ</button>
<div id="result"></div>



<!--フッター部分-->
<?php include(__DIR__.'/../frame/footer.html');?>
<script src="../css/practice.js">
</script>
</body>
</html>

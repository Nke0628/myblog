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

<div class="contact">
<p>Contact Form</p>
<form class="contact_form" method="post" action="">
name
<input class="other" type="text"><br><br>
title
<input class="other" type="text"><br><br>
text
<input class="text" type="textarea"><br><br>
<input class="submit" type="submit" name="submit" value="送信"><br>
</form>
<div>

<?php

if(isset($_POST['submit'])){

  mb_language('japanese');
  mb_internal_encoding('UTF-8');

  $to='ooo_diva@yahoo.co.jp';
  $subject = 'TEST';
  $message = 'こんにちはl';
  $result = mb_send_mail($to,$subject,$message);

}

?>

<!--フッター部分-->
<?php include('../frame/footer.html');?>

</body>
</html>

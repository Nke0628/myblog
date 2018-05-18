<?php
session_start();

//セッション変数の破棄
$_SESSION = array();

//セッションクリア
session_destroy();

//ログインページへ
header("location:login.php");
 ?>

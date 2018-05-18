<?php
ini_set('display_errors', 1);

require_once(__DIR__."/../library/DbConnect.php");

//エラーメッセージ初期化
$error_message = "";

//セッションスタート
session_start();

//ログインボタンを押下
if(isset($_POST['submit'])){
    //入力チェック
    if(empty($_POST['email'])){
        $error_message="ユーザ名が入力されていません";
    }
    elseif(empty($_POST['password'])){
        $error_message="パスワードが入力されてません";
    }
    //どちらも入力されている場合
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //データベースの内容と比較
        $db = new DbConnect();
        $sql="select * from user where email='{$email}' and password='{$password  }'";
        $rec =$db->select_one($sql);

        //emailとパスワードが一致していた場合
        if($rec){
            //セッションIDをセット
            $_SESSION['name'] = $rec['name'];
            var_dump($_SESSION['name']);
            header("location:login_top.php");
        }
        //emailとパスワードが一致していない場合
        else{
            $error_message = "emailかパスワードに誤りがあります";
        }
  }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="../css/login_style.css">
  <title>erroriscode</title>
</head>
<body>
<div class="top-wrapper">
    <div class="form">
        <h3>ERROR IS CODE LOGIN</h3>
        <?php echo $error_message ;?>
        <form method="post" action="">
            <p>Email</p>
            <input type="text" name="email"><br>
            <p>パスワード</p>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="login">
        </form>
    </div>
</div>
</body>
</html>

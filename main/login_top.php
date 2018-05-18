<?php

session_start();

if(!isset($_SESSION['name'])){
    header("location:login.php");
}
else {
    $name = $_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="sttlesheet" href="../css/login_style.css">
    <title>erroriscode</title>
</head>
<body>
<?php
    echo $name."ログイン中"
?>
<a href="logout.php">ログアウト</a>
</body>
</html>

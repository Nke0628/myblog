<?php


require_once(__DIR__.'/../library/DbConnect.php');

$data = $_POST['item'];

$db = new DbConnect();
$sql = "select * from article where title like '%${data}%'";

$rec = $db->select_all($sql);

$data = array();


foreach ($rec as $key => $value) {
    $data[] = $value;
}

//$hello = 'hello';
header('Content-type:application/json');
echo json_encode($data);

 ?>

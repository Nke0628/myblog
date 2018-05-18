<?php
date_default_timezone_set("Asia/Tokyo");

$date = new DateTime();
$date2 = new DateTime('2018-03-28 10:00:00');

$diff= $date->diff($date2);

echo $diff->d;
echo $diff->h;
echo $diff->i;
echo $diff->s;



 ?>

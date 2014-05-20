<?php
echo "";
echo 'HK:';
date_default_timezone_set('Asia/Hong_Kong');
$date = date('h:i:s a', time());
echo $date;
?>
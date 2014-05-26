<?php
echo "";
echo 'UK:';
date_default_timezone_set('Europe/London');
$date = date('h:i:s a', time());
echo $date;
?>
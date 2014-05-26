<?php
date_default_timezone_set('Australia/Melbourne');
echo "Sydney: Australia".": ";
echo jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 ); 
echo date("d")." "; 
echo date("m")." "; 
echo date("Y")." "; 
echo date("h:i:s A"); 
echo "<br>";
?>
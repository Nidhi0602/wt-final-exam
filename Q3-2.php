<?php
	$hour = Date('H');
	$time = Date('a');
	if($time =='am'){
        echo nl2br('GOODMORNING');
   }
   else if($time =='pm' and $hour < 18 ){
     echo nl2br("GOODEVENING");
   }
    else{
        echo nl2br("GOODNIGHT");
  }

?>

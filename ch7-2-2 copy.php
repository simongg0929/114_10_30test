<h1>SID:C112181112<BR>
NAME:simon</h1>
<p>
<?php
$weekday=array(1=> "mon", "tue", "wed", "thu", "fri", "sat", "sun");
for ($i=1; $i <=count($weekday); $i++){
   echo "$i : $weekday[$i]";
}
?>
<h1>SID:C112181112<BR>
NAME:simon</h1>
<p>
<?php
$arr["color"] = "紅色";
$arr["name"] = "simom";
$arr["shape"] = "circle";
foreach($arr as $k=>$v){
   echo "$k~ $v~<HR>";
}
echo "<BR>";
print_r($arr);
?>
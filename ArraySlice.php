<?php
//Array slice =array_slice(array,start,length)
// arr_slice(array,start,length)
$color =["red","green", "yellow" ,"pink"];
$newArray = array_slice($color,1,2);
 echo "<pre>";
 print_r($newArray);
 echo "</pre>";
?>
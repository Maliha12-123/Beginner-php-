<?php
$color =[
"red"=>"shirt",
"blue"=>"sweater",
"yellow"=>"flower"
];
$newArray=array_keys($color);
echo "<pre>";
 print_r($newArray);
 echo "</pre>";
 $newArray=array_key_first($color);
echo "<pre>";
 print_r($newArray);
 echo "</pre>";
 $newArray=array_key_last($color);
echo "<pre>";
 print_r($newArray);
 echo "</pre>";
  $newArray=array_key_exists("purple",$color);
if($newArray){
	echo "Key Exist";
}
else{
 echo "shutup it isn't here";
}
?>
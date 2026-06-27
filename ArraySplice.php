<?php
//array_splice(array,start,length,array-II)
//To remove any value from the array
$color =["red","blue","yellow"];
$newArray=array_splice($color,1,-1);
echo "<pre>";
 print_r($newArray);
 echo "</pre>";
 
 //To add second array value in first array
 $color =["red","blue","yellow","pink","green"];
$fruit=["apple","pear","orange"];
array_splice($color,2,2,$fruit);
echo "<pre>";
 print_r($color);
 echo "</pre>";
 //if i want to replace value from 2 and till end with the second array data weuse this function
  $color =["red","blue","yellow","pink","green"];
$fruit=["apple","pear","orange"];
array_splice($color,2,count($color),$fruit);
echo "<pre>";
 print_r($color);
 echo "</pre>";
 //Now for just replacing the selected value we put 0 as length
 $color =["red","blue","yellow","pink","green"];
$fruit=["apple","pear"];
array_splice($color,2,1,$fruit);
echo "<pre>";
 print_r($color);
 echo "</pre>";
?>


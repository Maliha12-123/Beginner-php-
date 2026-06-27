<?php
function maliha(){
	echo "Hello Everybody<br>";
}
maliha();
maliha();
  function sum($a,$b){
	  echo $a+$b . "<br>";
  }
  sum(2,2);
  // Recursive function
  function display($number){
  if($number <= 5){
  echo"$number <br>";
  display($number+1);
  }
  }
  display(1);
?>
  <?php
  // Function with return value
  function sum($a,$b,$c){
  $s=$a+$b+$c;
  return $s;
  }
    function percentage($st){
	  $per=$st/3;
	echo $per . "%";
	
  }
  $total=sum(55,65,88);
    percentage($total);
  ?>
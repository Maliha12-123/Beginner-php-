<?php
//*Array Count &Sizeof:
	$food= array('apple','banana','mango','mango','kiwi');
	$len=count($food);
	for($i=0;$i<$len;$i++){
	echo $food[$i]."<br>";
	}
	//Array another Count
	echo"<pre>";
	print_r(array_count_values($food));
	echo"</pre>";
	//Array IN & Array Search
	$fruit= array('apple','banana','mango','mango','kiwi');
	if(in_array(53,$fruit)){
		echo "Find Successfully";
	}
	else{
		echo"Cant find <br>";
	}
	$a=array(array('s','t'),array('s','t'),'o');
	if(in_array(array('s','t'),$a)){
		echo "Find Successfully";
	}
	else{
		echo"Cant find";
	}
	echo "<br>";
	$fruity= array('apple','banana','mango','mango','kiwi');
	echo array_search('apple',$fruity);
	
	
	?>
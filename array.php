<?php
$age = [ 
1=>"25",
2 => 28,
3=>22
];
$age["elon"]=50;
echo"<pre>";
var_dump($age);
echo"</pre>";
echo $age[1]."<br>";
	echo$age[2]."<br>";
	echo$age[3]."<br>";
	//ForEach Loop
	$age=[
	"bill"=>33,
	"steve" =>44,
	"elon"=> 55,
	];
	echo "<ul>";
	foreach($age as $key=>$value){
		echo "<li> $key=  .$value</li>"; 
	}
	 echo "</ul>";
	//MultiDimensional array
$emp=[
[1,"maliha","manager",50000],
[2,"saliha","manager",50000],
[3,"aliha","manager",50000],
[4,"fariha","manager",50000]
];
echo "<pre>";
print_r($emp);
echo"</pre>";
//MultiDimensional Assosiative array
$marks=[
     "Krishna" =>[
		 "physics"=>85,
		 "eng"=>75,
		 "math"=>65
	 ],
	 "Maliha" =>[
		 "eng"=>35,
		 "urdu"=>45,
		 "physics"=>95
	 ],
	 "Wajiha" =>[
		 "eng"=>35,
		 "urdu"=>45,
		 "physics"=>95
	 ]
	 ];
	 echo "<table border='2px' cellpadding='5px'
<tr>
<th>Student name</th>	   
<th>Physics </th>	
<th>Maths</th>	
<th>Chemistry </th>	
</tr>
";
	  foreach($marks as $key=> $v1){
		 echo "<tr>
		 <td>$key</td>";
		 foreach($v1 as $v2){
			 echo  "<td>$v2</td>";
		 }
		 echo "</tr>";
	 }
	  echo "</table>";
	 echo "<pre>";
print_r($marks);
echo"</pre>";
	
?>
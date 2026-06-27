<?php
//Array Replace &Array Replace Recursive
//Indexed Array
$a =['blue','green','yellow','orange'];
$c=['cow','cat','dog'];
$d=['sea','sand','grass'];
//We make a new array to replace it
$she=array_replace($a,$c,$d);
echo"<pre>";
print_r($she);
echo"</pre>";
//Assosiative Array
$a =['blue','green','yellow','orange'];
$e=['r'=>"cow",1=>"cat",'dog'];
$d=['sea','sand','grass'];
//We make a new array to replace it
$she=array_replace($a,$c,$e);
echo"<pre>";
print_r($she);
echo"</pre>";
//Array Replace Recursive
//Multidimensional Assosiative Array
$array1=array("a"=>array("red"),"b"=>array("yellow","pink"));
$array2=array("a"=>array("black"),"b"=>array(1=>"purple"));
$he=array_replace_recursive($array1,$array2);
echo"<pre>";
print_r($he);
echo"</pre>";
//Array Pop & Array Push
//Pop deletes the last value
$z =['blue','green','yellow','orange'];
array_pop($z);
echo"<pre>";
print_r($z);
echo"</pre>";
$z =['blue','green','yellow','orange'];
//push adds a new value at last 
array_push($z,'Cherry');
echo"<pre>";
print_r($z);
echo"</pre>";
//Array Shift &Unshift
//deletes first value
$z =['blue','green','yellow','orange'];
array_shift($z);
echo"<pre>";
print_r($z);
echo"</pre>";
//entry on first value Unshift
$z =['green','yellow','orange'];
array_unshift($z,'apple');
echo"<pre>";
print_r($z);
echo"</pre>";
//Array Merge and Combine
//array_merge() ->Index or assosiative array
//array_merge_recursive()-> Multidimensional Associative Array
//array_combinr()-> index array
$fruit =['a'=>'orange','b'=>'banana','c'=>'kiwi'];
$veggie=['b'=>'carrot','e'=>'spinach',76,16];
$newArray =array_merge($fruit,$veggie);
echo"<pre>";
print_r($newArray);
echo"</pre>";
// We can also use + to combine 
$newArray = $fruit +$veggie;
echo"<pre>";
print_r($newArray);
echo"</pre>";
//Array merge recursive doesnt replace common arrays but also make another internal associative Array
$newArray =array_merge_recursive($fruit,$veggie);
echo"<pre>";
print_r($newArray);
echo"</pre>";
//Array combine only works when value numbers are same for both Array
$name =["maliha","wajiha","huma"];
$age=["32","23","5"];
$newArray=array_combine($name,$age);
echo"<pre>";
print_r($newArray);
echo"</pre>";

?>
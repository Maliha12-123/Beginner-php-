<?php
//setcookie(name,value,expire,path,domain,secure,httponly)
//view cookie = 4_COOKIE[name]
$cookie_name="user";
$cookie_value="maliha";
setcookie($cookie_name,$cookie_value,time() + (8640 * 30), "/")
?>
<html>
<?php
  echo $_COOKIE[$cookie_name];
  //to set cookies 
  if(!isset($_COOKIE[$cookie_name])){
	  
	 echo "Cookie is not set";
  }
  else{
	  echo $_COOKIE [$cookie_name];
  }
?>
<body> 

</body>

</html>

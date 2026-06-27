<?php
// 3 steps sessionstart,session name,value (prints session) and echo session to access session 
// then for delete we first do sessionunset that removesall session variables then session destroy  
session_start();
$_SESSION["favcolor"] = "orange";
echo "Session Variable is set.";
?>
<?php
  //$_GET VARIABLE
  // FORMS 
    echo "<pre>";
  print_r($_GET);
   echo "</pre>";
   
  // echo "<pre>";
  // print_r($_POST);
   // echo "</pre>";
  //$_post for secret data 
  //$_SERVER VARIABLE
  //Extra data retrieve karsakte hain for eg http connection or server info or host info 
  // database mai save hoga
    echo "<pre>";
  print_r($_SERVER);
   echo "</pre>";
  echo $_SERVER['PHP_SELF'];
   echo $_SERVER['HTTP_HOST'];
   //NOW we want to store and print data on the same page 
   // so we first change form action="testform.php" to "<?php $_SERVER[PHP_SELF >?" 
?>
<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en" dir="1tr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
echo "Favorite Color: " .$_SESSION["favcolor"]
?>
</body>
</html>
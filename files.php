<?php
//files --> name ,size,tmp_name,type (for img jpg,png,gif) 
//move_uploaded_file(file,dest)-->upload client side image on server
//where file parameter we write tmp name and dest is the place where we want to store it 
//how to display file on server
if(isset($_FILES['image'])){
		echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	
	//now how to upload file on server
	$file_name =$_FILES["image" ]['name'];
	$file_size =$_FILES["image" ]['size'];
	$file_tmp =$_FILES["image" ]['tmp_name'];
	$file_type =$_FILES["image" ]['type'];
	move_uploaded_file($file_tmp,"upload-images/" . $file_name);
}
?>
<html>
<body>
<form action ="" method="POST" enctype="multipart/form-data"> <!--multipart/form-data is used because we cannot send uploaded file from post so we use thie type--> 
<input type="file" name="image"/><br><br>
<input type="submit"/> 
</form>
</body>
 
</html>
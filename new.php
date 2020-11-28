<?php
include('inc/dbconnect.php');

if(isset($_POST['submit'])) {
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'staff_images/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `image` (`image`) VALUES ('$filename')";
$qry = mysqli_query($conn, $sql);
if( $qry) {
echo "</br>image uploaded";
}
}

?>

<!DOCTYPE html>
<html>
<body>

<form action="new.php" method="post" >
 
<input type="file" name="uploadfile" />
<input type="submit" name="submit" value="upload" />
</form>
</body>
</html>


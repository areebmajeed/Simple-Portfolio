<?php
require_once('_header.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// properties of the uploaded file
$name = mysqli_real_escape_string($con, $_POST['imgname']);
$desc = mysqli_real_escape_string($con, $_POST['imgdesc']);
$about = mysqli_real_escape_string($con, $_POST['imgabout']);
$namext = mysqli_real_escape_string($con, $_FILES["imgupload"]["name"]);
$type = mysqli_real_escape_string($con, $_FILES["imgupload"]["type"]);
$size = mysqli_real_escape_string($con, $_FILES["imgupload"]["size"]);
$filepath = mysqli_real_escape_string($con, $_FILES["imgupload"]["tmp_name"]);
$error = mysqli_real_escape_string($con, $_FILES["imgupload"]["error"]);
$image = mysqli_real_escape_string($con, file_get_contents($filepath));
$ext = pathinfo($namext, PATHINFO_EXTENSION);
$catselect = $_POST['select'];
if(!isset($filepath) || !isset($name))
{
	echo "Please fill all the fields";
}
else
{
	/*if($_POST['imgname'] || !isset($_POST['select']))
	{
		echo "<center><div class='alert alert-danger'>You need to fill all the fields</div></center>";
	}*/
	//else
	//{
		$date = date("Y-m-d H:i:s");
		move_uploaded_file($filepath, "uploads/".$name.".".$ext);
		if(!$insert = mysqli_query($con, "INSERT INTO uploads(name, type, size, image, image_category, reg_date, description, about_design) VALUES ('$name', '$type', '$size', '$image', '$catselect', '$date', '$desc', '$about')"))
		{
			echo "<center><div class='alert alert-danger'>Problem uploading image.</div></center>" . mysqli_error($con);
		}
		else
		{
		
			echo "<center><div class='alert alert-success'>Upload Successful!</div></center>";
		
			$lastid = mysqli_insert_id($con);
		
		}
	//}
	
}


?>

<?php
require_once('_footer.php');
?>
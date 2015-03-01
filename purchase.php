<?php
require_once('_header.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($con));;
mysqli_select_db($con, DB_NAME) or die(mysqli_error($con)) ;

if(isset($_GET['id']))
{
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$query = mysqli_query($con, "SELECT * FROM uploads WHERE id='$id'");
	while ($row = mysqli_fetch_array($query))
	{
		echo '<div class="container">';
		echo '<center>';
		echo '<div class="jumbotron">';
		echo '<strong><h2>So you want to purchase <b>'.$row['name'].'</b>?</h2></strong>';
		echo '<hr>';
		echo'<img src="data:image/jpeg; image/png; image/gif; base64,'. base64_encode($row['image']).'" width="400" height="300"><hr>' ;
		echo '</div>';
		echo '<h2><b>Contact me through the links below to talk about the purchase.</b></h2>';
		
		echo '</center>';
	}
}

else
{
	echo "Error!";
}

?>

<?php
require_once('_footer.php');
?>
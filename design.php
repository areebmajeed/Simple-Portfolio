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
	
	//---------//
	
		echo '<div class="container">';
		echo '<center>';
		echo '<div class="jumbotron">';
		echo '<strong><h2>'.$row['name'].'</h2></strong>';
		echo '<hr>';
		if($row['type'] == "image/png")
{
echo '<img src="uploads/'.$row['name'].'.png">';
}
if($row['type'] == "image/jpg" || $row['type'] == "image/jpeg")
{
echo '<img src="uploads/'.$row['name'].'.jpeg">';
}
if($row['type'] == "image/gif")
{
echo '<img src="uploads/'.$row['name'].'.gif">';
}
		//echo'<img src="data:image/jpeg; image/png; image/gif; base64,'. base64_encode($row['image']).'">' ;
		echo '</div>';
		echo '</center>';
		
		
		echo '<div class="col-lg-4 col-sm-9">';
		echo '<div class="preview">';
		echo '<div class="image">';
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading"><b>Info</div></center></b>';
		echo '<div class="panel-body">';
		echo 'Name : <b>'.$row['name'].'</b><br>';
		echo 'Posted on : <b>'.$row['reg_date'].'</b><br>';
		echo 'Category : <b>'.$row['image_category'].'</b><br>';
		echo 'Description : <b>'.$row['description'].'</b>';
		echo'<br>';
		echo'<br>';
		
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="col-lg-4	col-sm-6">';
		echo '<div class="preview">';
		echo '<div class="image">';
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading"><b>About Design</div></center></b>';
		echo '<div class="panel-body">';
		echo ''.$row['about_design'];
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="col-lg-4	col-sm-6">';
		echo '<div class="preview">';
		echo '<div class="image">';
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading"><b>Navigation</div></center></b>';
		echo '<div class="panel-body">';
		echo '<a href="index.php" class="btn btn-primary">Home</a>';
		echo '&nbsp; <a href="aboutme.php" class="btn btn-primary">About Me</a>';
		echo '&nbsp; <a href="hireme.php" class="btn btn-success">Hire Me</a><br><br>';
		echo '&nbsp;<a href="index.php" class="btn btn-info">Logos</a>';
		echo '&nbsp;<a href="index.php" class="btn btn-info">Banners</a>';
		echo '&nbsp;<a href="index.php" class="btn btn-info">Posters</a>';
		
		
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="col-lg-5	col-sm-6">';
		echo '<div class="preview">';
		echo '<div class="image">';
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading"><b>Contact Me</div></center></b>';
		echo '<div class="panel-body">';
		echo '<table class="table table-striped">';
		echo '<tr>';
		echo		'<th></th>
						<th></th>
				</tr>
				<tr class="success">
				<td><img src="assets/default/images/skype_icon.png" width="85" height="85"></img></td>
				<td><b>hardik.manktala</b></td>
				</tr>
				<tr class="warning">
				<td><img src="assets/default/images/gmail_icon.png" width="75" height="75"></img></td>
				<td><b>hardik.manktala34@gmail.com</b></td>
				</tr>
				<tr class="info">
				<td><img src="assets/default/images/fiverr_icon.png" width="85" height="85"></img></td>
				<td><b>hardikmanktala</b></td>
				</tr></table>';
		echo '<b>Contact me to talk about purchase of this design.</b>';
		//social media with icons here
		
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		
		
		echo '</div>';
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



 
 <center>
 
<br>
<br>
<div class="alert alert-info">
<img src="assets/default/images/skype_icon.png" width="50" height="50"></img></b>hardik.manktala</b>&nbsp; &nbsp; &nbsp; <img src="assets/default/images/gmail_icon.png" width="50" height="50"></img></b> hardik.manktala34@gmail.com</b> &nbsp; &nbsp; <img src="assets/default/images/fiverr_icon.png" width="50" height="50"></img></b> hardikmanktala</b>
</div>
<br>


  <div class="jumbotron">
  <img src="assets/default/images/sample-watermark.png" width="200" height="200">
  <h1>Welcome!</h1>
  <p><div class="alert alert-success">The world has nice graphics!</div></p>
  <p align="justify"><h4>Hello there! <br><br> First of all, I'd like to appreciate your effort to spare some time and visit my site.<br><h5>I basically work as a freelancer for graphic designing and on this site, I showcase all of my designs for you. <br> <br>You can read more <div class="btn btn-justify"><a href="aboutme.php" >About Me</a></div> here.</h4></p>
  <p><div class="btn btn-justify"><a href="hireme.php" class="btn btn-success">Hire me today!</a></div></p>
</div>
</center>

<?php
require_once('_header.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($con));;
mysqli_select_db($con, DB_NAME) or die(mysqli_error($con)) ;
$fetchdb = "SELECT * FROM uploads ORDER BY reg_date DESC LIMIT 20";

$query_db = mysqli_query($con, $fetchdb);

?>

<center><h1><strong><img src="assets/default/images/latest_designs.svg" width="800" height="200"></img></strong></h1></center> 
<div class="container">
<fieldset>
<?php
if(mysqli_num_rows($query_db) == 0) {
echo "No results found";
} else { 

while($row = mysqli_fetch_array($query_db)) {

echo '<div class="col-lg-4 col-sm-6">';
echo '<div class="preview">';
echo '<div class="image">';
echo '<div class="panel panel-default">';
echo '<div class="panel-heading"><b><center>'. $row['name'] . '</div></center></b>';
echo '<div class="panel-body">';
if($row['type'] == "image/png")
{
echo '<center><a href="design.php?id='.$row['id'].'"><img src="uploads/'.$row['name'].'.png" width="300" height="300"></a></center>';
}
if($row['type'] == "image/jpg" ||$row['type'] == "image/jpeg" )
{
echo '<center><a href="design.php?id='.$row['id'].'"><img src="uploads/'.$row['name'].'.jpeg" width="300" height="300"></a></center>';
}
if($row['type'] == "image/gif")
{
echo '<center><a href="design.php?id='.$row['id'].'"><img src="uploads/'.$row['name'].'.gif" width="300" height="300"></a></center>';
}
echo '<br><hr>';
echo '<br><center>Posted on : <b>'. $row['reg_date'] . '</center></b>';
echo '<br><center>Category : <b>'. $row['image_category'] . '</center></b>';
echo '<br><center><a href="design.php?id='.$row['id'].'" class="btn btn-primary">View</a> &nbsp; <a href="purchase.php?id='.$row['id'].'" class="btn btn-success">Purchase</a></center>';
echo '</div>';  
echo '</div>';
echo "</div>";
echo "</div>";
echo "</div>";

}
}
?>

</fieldset>
</div>

<?php
require_once('_footer.php');
?>
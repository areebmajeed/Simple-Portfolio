<?php
require_once('_header.php');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($con));;
mysqli_select_db($con, DB_NAME) or die(mysqli_error($con)) ;

$query = mysqli_query($con, "SELECT * FROM users WHERE user_name='{$_SESSION['user_name']}'");

while($row = mysqli_fetch_array($query))
{

echo '<center><h1>Profile</h1></center>';
echo '<hr>';
echo '<div class="container">';
echo '<div class="jumbotron">';

echo '<h3>Hello '. $row['user_name'] . '!<br>Nice to meet you!<br>';
echo '<h4>Your e-mail is : '.$row['user_email'].'</h4>';

echo '<br><br><br>All other features on this page will be available soon..';

echo '</div>';
echo '</div>';
}
?>
<?php
require_once('_footer.php');
?>
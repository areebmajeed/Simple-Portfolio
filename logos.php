<?php
require_once('_header.php');


$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error($con));;
mysqli_select_db($con, DB_NAME) or die(mysqli_error($con)) ;
$fetchdb = "SELECT * FROM uploads WHERE image_category='Logos' ORDER BY reg_date DESC";

$query_db = mysqli_query($con, $fetchdb);



?>

<center>

</div>
</center>

<center><h1><strong><img src="assets/default/images/logos_2.png"></img></strong></h1></center> <hr>

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
echo '<center><a href="design.php?id='.$row['id'].'"><img src="data:image/jpeg; image/png; image/gif; base64,'. base64_encode($row["image"]).'" width="500" height="300"></a></center>';
echo '<br><hr>';
echo '<br><center>Posted on : <b>'. $row['reg_date'] . '</center></b>';

echo '<br><center><a href="design.php?id='.$row['id'].'" class="btn btn-primary">View</a> &nbsp; <a href="purchase.php?id='.$row['id'].'" class="btn btn-success">Purchase</a></center>';
echo '</div>';  
echo '</div>';
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

}
}
?>

<?php
//require_once('_footer.php');
?>


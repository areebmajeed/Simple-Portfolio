<?php

require_once('_header.php');

?>
<h1><center> Admin Panel </center></h1>
<?php

if($_SESSION['user_name'] == "Hardik")
{
	
	
	echo '
<form method="POST" action="upload.php" enctype="multipart/form-data">

<div class="container">
Name : <input type="text" name="imgname" class="form-control"><br>
Description : <input type="text" name="imgdesc" class="form-control"><br>
About Design : <input type="text" name="imgabout" class="form-control"><br>
<input type="file" name="imgupload" class="form-control"> <br>

<select class="form-control" id="select" name="select">
          <option value="Logos">Logos</option>
          <option value="Banners">Banners</option>
          <option value="Posters">Posters</option>
          
        </select>
		<br><br>
		<input type="submit" name="upload" value="Upload" class="btn btn-primary"> </div>
';

}
else
{
	echo "<center><div class='alert alert-danger'>You do not belong to this area, please leave.</div></center>";
}
?>

</form>
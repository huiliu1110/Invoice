<!--Connect with database-->
<?php include"db_connection.php";?>

<!--Perform database query-->
<?php

	$dir='products_images';

	$pname=$_POST['pname'];
	$pprice=$_POST['pprice'];
	$pcolor=$_POST['pcolor'];

	include "file_upload_error.php";

	list($width,$height,$type,$attr) = getimagesize($_FILES['uploadfile']['tmp_name']);

	switch($type)
	{
	    case IMAGETYPE_GIF:
	        $image = imagecreatefromgif($_FILES['uploadfile']['tmp_name']) or die('The file you upload was not supported filetype');
	        $ext = '.gif';
	    	break;
	    case IMAGETYPE_JPEG:
	        $image = imagecreatefromjpeg($_FILES['uploadfile']['tmp_name']) or die('The file you upload was not supported filetype');
	        $ext = '.jpg';
	    	break;    
	    case IMAGETYPE_PNG:
	        $image = imagecreatefrompng($_FILES['uploadfile']['tmp_name']) or die('The file you upload was not supported filetype');
	        $ext = '.png';
	    	break;    
	    default:
	        die('The file you uploaded was not a supported filetype.');
	}
		
	$query = "insert into products ";
	$query.= "(pname,pprice,pcolor) ";
	$query.= "values ";
	$query.= "('$pname','$pprice','$pcolor')";
	$result = mysqli_query($connection, $query);
	
	
	$last_id = mysqli_insert_id($connection);
	$imagename = $last_id.$ext;
	$query = 'update products set pimage="'.$imagename.'" where pid='.$last_id;
	$result = mysqli_query($connection, $query);

	switch($type)
	{
	    case IMAGETYPE_GIF:
	        imagegif($image,$dir.'/'.$imagename);
	    break;
	    case IMAGETYPE_JPEG:
	        imagejpeg($image,$dir.'/'.$imagename);
	    break;
	    case IMAGETYPE_PNG:
	        imagepng($image,$dir.'/'.$imagename);
	    break;
	}
	
	imagedestroy($image);

	//Close database connection
  	mysqli_close($connection);
?>

<script language='javascript' type='text/javascript'>
document.location.href="products.php?condition=";
</script>
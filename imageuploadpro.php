<?php
/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'learn');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);*/
$dfiles = glob('upload/*'); // get all file names
foreach($dfiles as $dfile){ // iterate files
  if(is_file($dfile))
    unlink($dfile); // delete file
}


if(isset($_POST) && !empty($_FILES['image']['name'])){
	
	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name); //explode function breaks strings into array
	$image_name = uniqid().".".$ext;
	$tmp = $_FILES['image']['tmp_name'];
	$path='upload/'.$image_name;

	if(move_uploaded_file($tmp, 'upload/'.$image_name)){
		/*mysqli_query($db,"INSERT INTO items (title)
		VALUES ('".$image_name."')");*/
		echo "<img width='200px' height='200px'   src='upload/".$image_name."' id='drag4' data ='$path' >";

	}else{
		echo "Uploading failed";
	}

}



?>
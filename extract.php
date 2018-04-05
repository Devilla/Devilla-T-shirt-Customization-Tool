<html>
<body>


<?php
	$baseFromJavascript=$_POST['base64'];
	// baseFromJavascript will be the javascript base64 string retrieved of some way (async or post submited)

// We need to remove the "data:image/png;base64,"
$base_to_php = explode(',', $baseFromJavascript);
// the 2nd item in the base_to_php array contains the content of the image
$data = base64_decode($base_to_php[1]);

// here you can detect if type is png or jpg if you want
$filepath = "extract/".uniqid().".jpg"; // or image.jpg

// Save the image in a defined path
file_put_contents($filepath,$data);


//db


$conn=mysqli_connect("localhost", "root", "","myDB");

$imgData =addslashes(file_get_contents($filepath));
$imageProperties = getimageSize($filepath);
$sql = "INSERT INTO output_images(imageType ,imageData)
VALUES('{$imageProperties['mime']}', '{$imgData}')";
$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error());

$dfiles = glob('extract/*'); // get all file names
foreach($dfiles as $dfile){ // iterate files
  if(is_file($dfile))
    unlink($dfile); // delete file
}

?>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "","myDB");

if(isset($_GET['image_id'])) {
$sql = "SELECT imageType,imageData FROM output_images WHERE imageId=" . $_GET['image_id'];
$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysqli_fetch_array($result);
header("Content-type: " . $row["imageType"]);
echo $row["imageData"];
}
mysqli_close($conn);
?>
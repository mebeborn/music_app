<?php include("header.php"); 

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];
} else {
	header("Location: index.php");
}

$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id = '$albumId'");
$album = mysqli_fetch_array($albumQuery);

$artistId = $album['artist'];

$artist = new Artist($con ,$artistId);

echo $album['title']."<br>";
echo $artist->getName();

?>



<?php include("footer.php"); ?>
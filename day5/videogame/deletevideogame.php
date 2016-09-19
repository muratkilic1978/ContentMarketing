<?php
//Page header
$siteTitle = 'Delete Video Games Collection';
$siteName = 'Remove Video Games from Collection';
$siteDescription = 'Please select Videogames you want to delete from your collection.';

include('header.php');

 ?>
	<i class="fa fa-trash-o fa-4x"></i>
	<!-- <img src="images/delete.png" width="256" height="auto" alt="delete-image"> -->
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
	<?php include('includes/connectdb.php'); ?>
	
	<?php 
	if(isset($_POST['submit'])){
		foreach ($_POST['todelete'] as $delete_id ){
			$query = "DELETE FROM VideoGames WHERE id=$delete_id";
			mysqli_query($dbc, $query) or die('Error querying database');
		}
		
		echo "<strong>" .count($_POST['todelete']) . " VideoGames(s) were deleted!</strong> <br>";
		
	}

	?>
	<?php 
		$query = "SELECT videogames.id AS vid, videogames.title AS title, videogames.price AS price, videogames.description AS description, publishers.publishername AS publishername, platforms.platformname AS platformname FROM publishers INNER JOIN videogames ON publishers.id = videogames.publisherid INNER JOIN platforms ON videogames.platformid = platforms.id ORDER BY vid DESC";
		$videoGames = mysqli_query($dbc, $query);

		while( $row = mysqli_fetch_array($videoGames) ){
			echo '<pre><input type="checkbox" value="'.$row['vid']. '" name="todelete[]">';

			echo '<strong>' .$row['title']. ': </strong>';

			echo '<strong>Published by:</strong> ' .$row['publishername'] . ' ';

			echo '<strong>Platforms: </strong>'.$row['platformname']. ' ';

			echo '<strong>Pris: </strong>'.$row['price'].' ';

			echo '<br></pre>';

		}
	mysqli_close($dbc);
	?>

		<input class="btn btn-primary btn-block btn-danger" type="submit" name="submit" value="Remove">
	</form>
<?php include('footer.php'); ?>
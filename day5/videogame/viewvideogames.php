
<?php 
//Page header
$siteTitle = 'View Video Games Collection';
$siteName = 'Video Games Collection';
$siteDescription = 'Here you will find all my video games from different platforms and vendors - hope you enjoy it.';

//This script retrieves all the records froom the users table
include('header.php');


//connect to database.
/* use require to include the connectdb.php file which connect to the database */
include ('includes/connectdb.php');

/* Make an query which - select firstname, lastname, email, registration_date, id and order by registration_date ascending
*/

$sql = "SELECT videogames.id AS vid, videogames.title AS title, videogames.price AS price, videogames.description AS description, publishers.publishername AS publishername, platforms.platformname AS platformname FROM publishers INNER JOIN videogames ON publishers.id = videogames.publisherid INNER JOIN platforms ON videogames.platformid = platforms.id ORDER BY vid DESC";
$result = @mysqli_query ($dbc, $sql); //Run the SQL-Query

if ($result) //if SQL-Query ($result) dan OK, display the records
{
	//Table header.
	echo '<table class="table table-striped">
	<tr>
		<td><b>Title</b></td>
		<td><b>Description</b></td>
		<td><b>Publisher</b></td>
		<td><b>Platform</b></td>
		<td><b>Price</b></td>
	</tr>
';
	
	//Fetch and print all the records;
	
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<tr>
				<td>' . $row['title'] . '</td>
				<td>' . $row['description'] . '</td>
				<td>' . $row['publishername'] . '</td>
				<td>' . $row['platformname'] . '</td>
				<td>' . $row['price'] . '</td>
			</tr>';
	}
		
	echo '</table>'; //Close the table
	
	mysqli_free_result($result); //Free up the ressources.
	
}
else
{
	// If it did not run OK.
	
	//Public message:
	echo '<p class="error">The current customers could not be retrieved. We apologize for any inconvenience.</p>';
	
	//Debugging message:
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $sql . '</p>';
	
}  //End of if ($result) IF.

mysqli_close($dbc); //Close the database conection.
	
include('footer.php');	
?>
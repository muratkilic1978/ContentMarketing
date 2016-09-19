<?php 
//This script retrieves all the records froom the users table

//Page header:
echo '<h1>View performances</h1>';

//connect to database.
/* use require to include the connectdb.php file which connect to the database */
include ('includes/connectdb.php');

/* Make an query which - select firstname, lastname, email, registration_date, id and order by registration_date ascending
*/

$sql = "SELECT artist.name AS artistname, artist.genre AS artistgenre, stage.colorname AS stagecolor, stage.capacity AS stagecapacity, perform.date AS performdate, perform.time AS performtime FROM artist INNER JOIN perform ON artist.id = perform.artist_id INNER JOIN stage ON perform.stage_id = stage.id order by genre DESC";
$result = @mysqli_query ($dbc, $sql); //Run the SQL-Query

if ($result) //if SQL-Query ($result) dan OK, display the records
{
	//Table header.
	echo '<table align="center" cellspacing="20" cellpadding="3px"	width="85%">
			<thead>	
				<tr>
					<td align="left"><b>Artist</b></td>
					<td align="left"><b>Genre</b></td>
					<td align="left"><b>Stage</b></td>
					
					<td align="left"><b>Date</b></td>
					<td align="left"><b>Time</b></td>
				</tr>
			</thead>
';
	
	//Fetch and print all the records;
	
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<tbody>
				<tr>
					<a href=""><td align="left">' . $row['artistname'] . '</td></a>
					<td align="left">' . $row['artistgenre'] . '</td>
					<td align="left">' . $row['stagecolor'] . '</td>
					
					<td align="left">' . $row['performdate'] . '</td>
					<td align="left">' . $row['performtime'] . '</td>
				</tr>
			</tbody>';
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
	
	
?>
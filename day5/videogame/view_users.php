<?php 
//This script retrieves all the records froom the users table


$page_title = 'Add/delete Customers';
/* include the header.html file from the folder includes */
include ('includes/header.html');

//Page header:
echo '<h1>Add/Delete Customers</h1>';

//connect to database.
/* use require to include the connectdb.php file which connect to the database */
require ('includes/connectdb.php');

/* Make an query which - select firstname, lastname, email, registration_date, id and order by registration_date ascending
*/
$sql = "SELECT first_name, last_name, email, DATE_FORMAT(registration_date, '%M %d,%Y') AS dr, id FROM customer ORDER BY registration_date ASC";
$result = @mysqli_query ($dbc, $sql); //Run the SQL-Query

if ($result) //if SQL-Query ($result) dan OK, display the records
{
	//Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3"	width="75%">
	<tr>
		<td align="left"><b>Edit</b></td>
		<td align="left"><b>Delete</b></td>
		<td align="left"><b>Firstname</b></td>
		<td align="left"><b>Lastname</b></td>
		<td align="left"><b>Email</b></td>
		<td align="left"><b>Date Registered</b></td>
	</tr>
';
	
	//Fetch and print all the records;
	
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<tr>
				<td align="left"><a href="edit_user.php?id=' . $row['id'] . '">Edit</a></td>
				<td align="left"><a href="delete_user.php?id=' . $row['id'] . '">Delete</a></td>
				<td align="left">' . $row['first_name'] . '</td>
				<td align="left">' . $row['last_name'] . '</td>
				<td align="left">' . $row['email'] . '</td>
				<td align="left">' . $row['dr'] . '</td>
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

/* include the footer.html file from the folder includes  */
include ('includes/footer.html');
	
	
	
?>
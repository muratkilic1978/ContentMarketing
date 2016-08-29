	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Write to a text file</title>
	</head>
	<body>

	<h1>Adding your bookmarks to a text file:</h1>
	<form action="addtofile.php" method='post'>
		<fieldset>
			<legend>Add bookmark</legend>
			<p><label class="field" for="Description">Description:</label><input type="text" name="description" value="" ></p>
			<p><label class="field" for="URL">URL:</label><input type="url" name="webadress" value="" ></p>
			
			<input type='submit' value='Add text'>
		</fieldset>
	</form>

	<?php

	// Open the text file
	$f = fopen("textfile.txt", "a+");

	$textblock = $_POST['description'] . ", " . $_POST['webadress'] . "\n";

	// Write text
	fwrite($f, $textblock); 

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$myfile = fopen("textfile.txt", "r") or die("Unable to open file");

	while (!feof($myfile)) {
		echo fgets($myfile) . "<br>";
	}

	fclose($myfile);

	?>
	
	</body>

	</html>
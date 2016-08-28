<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Learning PHP</title>
	</head>
	<body>
<?php

if(isset($_POST['submit'])){

$bmi = floatval(trim($_POST['answer']));

	if ($bmi < 18.5) {
		print ("Du er undervægtig - tag og få spist noget mere mad!");
	}

	else if ($bmi > 18.8 AND $bmi < 24.9) {
		print ("Du har en normalvægt - fortsæt den sunde livstil!");
	}

	else if ($bmi > 25.0 AND $bmi < 29.9) {
		print ("Du er en smule overvægtig - se at kommer i form!");
	}

	else {
		print ("Du er kraftig overvægtig og bør opsøge din egenlæge!");
	}


}
?>
		<form method="POST" action="">
		Indtast din bmi værdi og se om du er i form<br>
		<input type="text" name="answer">
		<input type="submit" value="Submit" name="submit">
		</form>
	</body>
</html>



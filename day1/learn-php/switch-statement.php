<?php
if(isset($_POST['submit'])){

$os = $_POST['answer'];

	switch ($os) {
		case "OSX":
			print "I'm a macintosch!";
			break;
		case "Windows";
			print 'I\'m a PC';
			break;
		case "Linux":
			print 'I\'m fucking awesome';
			break;
		default:
			print 'How\'d you get here, your phone?';
	}
}
?>
<form method="POST" action="">
Please type your current operating system:<br>
<input type="text" name="answer">
<input type="submit" value="Submit" name="submit">
</form>








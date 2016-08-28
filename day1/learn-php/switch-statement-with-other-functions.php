<?php
if(isset($_POST['submit'])){

$os = strtolower(trim($_POST['answer']));

	switch ($os) {
		case "osx":
			print "I'm a macintosch running on " . $os;
			break;
		case "windows";
			print 'I\'m a PC with ' . $os . ' installed';
			break;
		case "linux":
			print 'I\'m fucking awesome open source os';
			break;
		default:
			print 'How\'d you get here, with your ' .$os . ' phone?';
	}
}
?>
<form method="POST" action="">
Please type your current operating system:<br>
<input type="text" name="answer">
<input type="submit" value="Submit" name="submit">
</form>
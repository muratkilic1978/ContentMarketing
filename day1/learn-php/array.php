<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php $numbers = array();

$numbers[] = 1;
$numbers[] = 5;
$numbers[] = 7;
$numbers[] = 14;

#var_dump($numbers);
#echo $numbers[3];

foreach ($numbers as $value)
{
	print $value * 2 . "<br>";

}


 ?>
</body>
</html>
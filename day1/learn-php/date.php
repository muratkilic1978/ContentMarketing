<?php include("datautility.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
#echo date("G:i");
#echo '<br>';
#echo date('d. M Y');

 $dato = new DateUtility();
 
 $dato->getCurrentTime();
 

?>
</body>
</html>
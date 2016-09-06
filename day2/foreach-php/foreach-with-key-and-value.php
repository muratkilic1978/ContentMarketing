<!DOCTYPE html>
<html>
<body>

<?php 
$population = array('2016' => 5707251, '2020' => 5865810, '2030' => 6119215, '2040' => 6260127, '2050' => 6352995, '2060' => 6482769); 
echo "Estimated population in Denmark <br><br>";
foreach ($population as $key => $value) 
{
   echo "<dt>Year $key</dt><dd>$value</dd><br>";

}
?>   

</body>
</html>
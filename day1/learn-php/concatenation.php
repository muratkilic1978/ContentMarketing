<?php
$first = 'Jack';

$name = $first . ' Mehoff <br>';
print $name;
//Working correct

$name = $first + 'Mehoff <br>';
print $name . "<br>"; 
//NOT working correct

$name = "$first Mehoff <br>";
print $name;
//Working correct

$name = '$first Mehoff';
print $name;


$firstname = '<br>Jones\'s';
print $firstname;

//NOT working correct

?>


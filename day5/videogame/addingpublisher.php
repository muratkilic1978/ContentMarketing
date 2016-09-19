<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Adding Publisher</title>
  <!---
      * CSS files that are included
      * 
      *
    -->
    <!-- Latest AweSome Font CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Latest Bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      
    <!-- jQuery CSS  -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

<!--
 * JavaScript files that are included
 * 
 * 
-->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  
</head>
<body>

<?php
  include('includes/connectdb.php');

  $publishername = $_POST['publishername'];
  $website = $_POST['website'];
  

  $query = "INSERT INTO Publishers (id, publishername, website)  VALUES (NULL, '$publishername', '$website')";
  mysqli_query($dbc, $query) or die('Error querying database.');

  echo '<div class="wrap">';
  echo  '<div class="container">';
  echo      '<h4>Thank You for Registering Publisher!</h4>';
  echo      '<button class="btn btn-danger" onclick="goBack()">Go Back</button>';
  echo  '</div>';
  echo '</div>';

  mysqli_close($dbc);
?>

  <script>
    function goBack() {
    window.history.back();
    }
  </script>
  
</body>
</html>

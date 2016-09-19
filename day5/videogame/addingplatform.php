<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Adding Platform</title>
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
  # Connect to the database
  include('includes/connectdb.php');

  # Get data from Submit-Form and store it in variables
  $platformname = $_POST['platformname'];
  

  # Prepare SQL-query for insert operation
  $query = "INSERT INTO platforms (id, platformname)  VALUES (NULL, '$platformname')";
  # Execute SQL-query and if some errors occur then return am error message 
  mysqli_query($dbc, $query) or die('Error querying database.');

  # Write out to html-document
  echo '<div class="wrap">';
  echo  '<div class="container">';
  echo      '<h4>Thank You for Registering a platform name!</h4>';
  echo      '<button class="btn btn-danger" onclick="goBack()">Go Back</button>';
  echo  '</div>';
  echo '</div>';

  # Close database-connection
  mysqli_close($dbc);
?>
  <!--  ###### A JS-script that make it possible to return to previus page ##### --> 
  <script>
    function goBack() {
    window.history.back();
    }
  </script>
  
</body>
</html>

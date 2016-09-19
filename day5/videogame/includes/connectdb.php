<?php
# Connect on localhost for user root
# with password xxxxxxx to database userloginwebsystem 

$dbc = mysqli_connect("localhost","root","password","testvideogames") or die (mysqli_connect_error() );

#Display MySQL version and host


#if(mysqli_ping($dbc))
#{ echo 'MYSQL Server' .mysqli_get_server_info($dbc). ' <br> on ' . mysqli_get_host_info($dbc); }


# Set encoding to match PHP script

mysqli_set_charset($dbc, 'utf8'); 
?>



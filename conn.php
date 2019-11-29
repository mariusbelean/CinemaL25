<?php
$serverName = "DESKTOP-425VGL3\MARIUSSQL"; //serverName\instanceName


$connectionInfo = array( "Database"=>"CinemaL25");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection to SQL Server database established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


?>
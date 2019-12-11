<?php

require "conn.php";

if( $conn ) {
     echo "Connection to SQL Server database established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
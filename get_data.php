<?php

	include 'conn.php';

$sql = "SELECT * FROM dbo.Locuri";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['id_loc'].", ".$row['id_sala'].", ".$row['numar_loc']."<br />";
}

sqlsrv_free_stmt( $stmt);

?>
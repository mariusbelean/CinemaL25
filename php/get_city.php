<?php

require 'conn.php';

$sql = "SELECT * FROM dbo.Orase";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

$var = " selected";

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo "<option value='".$row['id_oras']."'".$var.">".$row['nume_oras']."</option><br>";
      $var = "";
}

sqlsrv_free_stmt( $stmt);

?>
<?php

$keyId = $_POST['keyId'];

require "conn.php";

$sql = "SELECT * FROM dbo.Cinema
       WHERE dbo.Cinema.id_oras = $keyId";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
     echo "<button onclick='getCinemaId(".$row['id_cinema'].")'>".$row['nume_cinema']."</button><br>";
}

sqlsrv_free_stmt( $stmt);

?>
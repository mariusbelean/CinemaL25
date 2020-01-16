<?php

$keyId = $_POST['keyId'];

require "conn.php";

$sql = "SELECT DISTINCT * FROM dbo.Locuri
        WHERE dbo.Locuri.id_sala = $keyId";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

echo "Sala ".$keyId;

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
   
    $par = $row['id_loc'];
    $str = "<button onclick='selectareLoc(".$par.")'>".$row['numar_loc']."</button>";
    echo $str;
}

sqlsrv_free_stmt( $stmt);

?>
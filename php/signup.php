<?php

$fn = $_POST['fN'];
$ln = $_POST['lN'];
$em = $_POST['eM'];
$tel = $_POST['tel'];

require "conn.php";

$sql = "INSERT INTO dbo.Clienti
        (nume_client, prenume_client, email_client, tel_client)
        VALUES ('$ln', '$fn', '$em', '$tel')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

sqlsrv_free_stmt( $stmt);

?>
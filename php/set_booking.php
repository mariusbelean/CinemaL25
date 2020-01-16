<?php

$fn = $_POST['fN'];
$ln = $_POST['lN'];
$em = $_POST['eM'];
$tel = $_POST['tel'];

$prog = $_POST['program'];
$loc= $_POST['loc'];

require "conn.php";

//$sql = "SELECT DISTINCT id_client FROM dbo.Clienti
//        WHERE nume_client LIKE '$ln' AND prenume_client LIKE '$fn' AND email_client LIKE '$em' AND tel_client = $tel";

$sql = "SELECT DISTINCT id_client FROM dbo.Clienti
        WHERE nume_client LIKE '$ln' AND prenume_client LIKE '$fn'";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

$result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
$id = $result['id_client'];   

sqlsrv_free_stmt( $stmt);

$sql = "INSERT INTO dbo.Rezervari
        (id_program, id_client, id_loc)
        VALUES ('$prog', '$id', '$loc')";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

sqlsrv_free_stmt( $stmt);


?>
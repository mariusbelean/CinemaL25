<?php

$keyId = $_POST['keyId'];

require "conn.php";

$sql = "SELECT * FROM dbo.Program
        JOIN dbo.Sala ON (dbo.Program.id_sala = dbo.Sala.id_sala)
        JOIN dbo.Cinema ON (dbo.Sala.id_cinema = dbo.Cinema.id_cinema)
        JOIN dbo.Filme ON (dbo.Program.id_film = dbo.Filme.id_film)
        WHERE dbo.Cinema.id_cinema = $keyId";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
     echo "<h4>".$row['nume_film']."</h4>";
     echo "Sala: ".$row['nr_sala']." Durata: ".$row['durata_film']." Gen: ".$row['genul_filmului']."<br>";
}

sqlsrv_free_stmt( $stmt);

?>
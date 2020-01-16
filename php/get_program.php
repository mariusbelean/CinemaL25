<?php

$keyId = $_POST['keyId'];

require "conn.php";

$sql = "SELECT * FROM dbo.Program
        JOIN dbo.Sala ON (dbo.Program.id_sala = dbo.Sala.id_sala)
        JOIN dbo.Cinema ON (dbo.Sala.id_cinema = dbo.Cinema.id_cinema)
        JOIN dbo.Filme ON (dbo.Program.id_film = dbo.Filme.id_film)
        WHERE dbo.Cinema.id_cinema = $keyId
        ORDER BY dbo.Filme.nume_film, ora_start";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $str = "<h4>".$row['nume_film']."</h4>";
    $str = $str."Durata: ".$row['durata_film']."  minute, Gen: ".$row['genul_filmului'].", Regizor: ".$row['regizor_film']."<br>";
    $sql = "SELECT COUNT(*) AS locuri FROM dbo.Locuri
                WHERE dbo.Locuri.id_sala = ".$row['id_sala']."";

    $smth = sqlsrv_query( $conn, $sql );      
    if( $smth === false) {
        die( print_r( sqlsrv_errors(), true) );
    }   
    $count = sqlsrv_fetch_array( $smth, SQLSRV_FETCH_ASSOC);

    $par = $row['id_program'].", ".$row['id_sala'].", ".$row['id_film'].", ".$count['locuri'];
    $str = $str."<button onclick='rezervaLocuriFilm(".$par.")'>REZERVA</button>";
    echo $str;
}

sqlsrv_free_stmt( $stmt);

?>
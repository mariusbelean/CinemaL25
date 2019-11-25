<?php
    //require "connection.php";
    $user_name = $_POST["username"];
    $password = $_POST["password"];
    $sn = "DESKTOP-LI8CSNN";
    $connInf = array("Database"=>"MovieCity");
    $conn = sqlsrv_connect($sn, $connInf);

    if($conn) {
        echo "Success";
    }else {
        echo "Fail";
    }

    /*$sql_query = "SELECT * FROM clients WHERE username = '$user_name' AND password = '$password';";
    $result = mysqli_query($connection, $sql_query);
    if(mysqli_num_rows($result) == 1) {
        echo "Login successful!";
    }else {
        echo "Error!";
    }*/
?>
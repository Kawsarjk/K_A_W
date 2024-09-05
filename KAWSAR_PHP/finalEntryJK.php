<?php
    if ($entry){
        include 'KAWSAR_PHP\baseJK.php';
        $conn = new mysqli($server, $username, $password, $database);
        $query = "INSERT INTO tickets(country, departure, price)";
        $query .= "VALUES('".$country."','".$departure."','".$price."')";
        $conn->query($query);
        $conn->close();
    }
?>  


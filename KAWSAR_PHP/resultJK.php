<?php
    include 'KAWSAR_PHP\baseJK.php';
    $conn = new mysqli($server, $username, $password, $database); 
    $query = " SELECT  *  FROM  Ketofood";
    $rs = $conn->query ($query);
    $conn->close();
    $num = $rs->num_rows;
    ?>
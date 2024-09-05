<?php
    $entry = TRUE;
    if (isset($_POST['country'])) {$country = $_POST['country'];} else {$entry = FALSE;}
    if (isset($_POST['ketofood'])) {$ketofood = $_POST['ketofood'];} else {$entry = FALSE;}
    if (isset($_POST['price'])) {$price = $_POST['price'];} else {$entry = FALSE;}
?>
<?php

    // SETUP PAKO
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "palay";

    // SETUP THOM
    // $host = "127.0.0.1";
    // $user = "user";
    // $password = "";
    // $db = "palay";

    $sql = mysqli_connect($host, $user, $password, $db) or die("FK".mysqli_connect_error());
?>
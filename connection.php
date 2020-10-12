<?php

$con = mysqli_connect("localhost", "root", "", "playstore_apps_db");
$con -> set_charset("utf8mb4");

if (mysqli_connect_error()) {
    echo "Fail to connect with Data base" . mysqli_connect_errno();
}

?>
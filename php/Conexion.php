<?php
$mysqli = new mysqli("localhost", "sami", "1234", "libreria");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$mysqli = new mysqli("127.0.0.1", "sami", "1234", "libreria", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
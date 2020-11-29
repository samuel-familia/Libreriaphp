<?php
$mysqli = new mysqli("localhost", "id15527471_sami", "Cotorr@123456789", "id15527471_libreria");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$mysqli = new mysqli("localhost", "id15527471_sami", "Cotorr@123456789", "id15527471_libreria", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
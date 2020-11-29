<?php
    require_once "conexion.php";
    
    $sql= "SELECT * FROM autores";
    $result = $mysqli->query($sql);
    
    $numfilas = $result->num_rows;

?>
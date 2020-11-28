<?php
    require_once "Conexion.php";
    
    $sql= "SELECT * FROM autores";
    $result = $mysqli->query($sql);
    
    $numfilas = $result->num_rows;

?>
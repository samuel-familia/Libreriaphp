<?php
    require_once "conexion.php";
    
    $sql= "SELECT * FROM titulos";
    $result = $mysqli->query($sql);
    
    $numfilas = $result->num_rows;


   
?>
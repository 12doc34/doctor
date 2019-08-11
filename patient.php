<?php
    $mysqli = new mysqli("localhost", "root", "password", "");
    $result = $mysqli->query("SELECT lastname FROM employees");
    
?>

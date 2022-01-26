<?php

function db_connect()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=loctel;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $pdo;
    } catch (PDOException $e) {
        echo 'erreur';
        die();
    }
}

// $con=new mysqli('localhost','loctel', 'root');

// if($con){
//     echo "conection avec succès";
// }else{
//     die(mysqli_error($con));
// }
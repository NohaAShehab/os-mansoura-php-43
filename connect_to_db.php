<?php



function connect_pdo(){

    $dsn = 'mysql:dbname=osmans43;host=127.0.0.1;port=3306;'; #port number
    $user = 'osmansoura43';
    $password = 'Iti123456789_';
    $db= new PDO($dsn, $user, $password);

    return $db;
}
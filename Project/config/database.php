<?php

$dbName = 'BurgerCity';

$dns   = 'mysql:dbname='.$dbName.';host=localhost';
$user  = 'root';
$pw    = 'root';
$options    = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$db = null;

try
{
    $db = new PDO($dns, $user, $pw, $options);
} 
catch (PDOException $e)
{
    die( 'Database connection failed: ' . $e->getMessage() );
}
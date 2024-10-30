<?php

function db_connect($host, $db, $user, $password = '')
{
    define('HOST', $host);
    define('DB', $db);
    define('USER', $user);
    define('PASSWORD', $password);

    $DSN = "mysql:host=" . HOST . ";dbname=" . DB . ";charset=UTF8";

    try {
        $PDO = new PDO($DSN, USER, PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if ($PDO) {
            echo DB . " connected successfully";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

return db_connect('localhost', 'anony', 'root');

<?php


function connect_db()
{
    $server = "mysql:host=localhost;dbname=function_db";
    $user = 'root';
    $pass = '';
    try {
        $pdo = new PDO($server, $user, $pass);
        $pdo->exec(" SET NAMES utf8");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo 'اتصال با موفقیت انجام گردید.';

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $pdo;
}

?>


<?php
require_once 'connect.php';
function uploaded($file, $loc)
{
    $img_name = $file['name'];
    $name_type = explode('.', $img_name);
    $type = end($name_type);
    $new_name = "_" . time() . "." . $type;
    $tmp = $file['tmp_name'];
    $location = $loc . $new_name;
    move_uploaded_file($tmp, $location);
    return $location;
}

function count_comment()
{
    $author = $_SESSION['login'];
    $pdo = connect_db();
    $sql = "SELECT * FROM `comment_tbl` WHERE author='$author'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    echo count($results);
}

function count_post()
{
    $author = $_SESSION['login'];
    $pdo = connect_db();
    $sql = "SELECT * FROM `post_tbl` WHERE author='$author'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    echo count($results);
}

function register_date()
{
    $author = $_SESSION['login'];
    $pdo = connect_db();
    $sql = "SELECT tarikh FROM `user_tbl` WHERE username='$author'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetch();
    $tarikh = $results['tarikh'];

    echo $tarikh;
}

function user_role()
{
    $author = $_SESSION['login'];
    $pdo = connect_db();
    $sql = "SELECT roles FROM `user_tbl` WHERE username='$author'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetch();
    return $results['roles'];
}
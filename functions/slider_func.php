<?php
include_once "connect.php";
require_once 'jdf.php';

function add_slider($info, $img)
{
    $title = $info['title'];
    $url = $info['url'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = 'off';
    }
    $pdo = connect_db();
    $sql = "INSERT INTO `slider_tbl` ( `title`, `url`, `img`, `status`)
            VALUES  ('$title','$url','$img','$status')";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function all_slider()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `slider_tbl`";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function delete_slider($id)
{
    $pdo = connect_db();
    $sql = "DELETE FROM `slider_tbl` WHERE id = '$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function single_slider($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `slider_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

function update_slider($id, $info, $img)
{
    $title = $info['title'];
    $url = $info['url'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = "off";
    }

    $pdo = connect_db();
    $sql = "UPDATE `slider_tbl` SET 
                       `title`='$title',`url`='$url',`img`='$img',`status`='$status' 
                        WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function show_slider()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `slider_tbl` WHERE status='on'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
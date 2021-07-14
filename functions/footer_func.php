<?php
require_once 'connect.php';

function add_footer_menu($info)
{
    $title = $info['title'];
    $url = $info['url'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = "off";
    }
    $pdo = connect_db();
    $sql = "INSERT INTO `menufooter_tbl`( `title`, `url`, `status`) VALUES 
                                         ('$title','$url','$status')";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function show_footer_menu()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM menufooter_tbl";
    $query = $pdo->prepare($sql);
    $query->execute();
    $resulte = $query->fetchAll(PDO::FETCH_OBJ);
    return $resulte;

}

function show_single_footer_menu($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM menufooter_tbl WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $resulte = $query->fetch(PDO::FETCH_OBJ);
    return $resulte;

}

function update_footer_menu($info, $id)
{
    $title = $info['title'];
    $url = $info['url'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = "off";
    }
    $pdo = connect_db();
    $sql = "UPDATE `menufooter_tbl` SET `title`='$title',`url`='$url',`status`='$status'  WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function delete_footer_menu($id)
{
    $pdo = connect_db();
    $sql = "DELETE FROM `menufooter_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
}
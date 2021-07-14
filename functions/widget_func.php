<?php
include_once 'connect.php';
function add_widget($titles, $icons)
{
    foreach ($titles as $key => $title) {
        $icon = $icons[$key];
        $pdo = connect_db();
        $sql = "INSERT INTO `widget_|tbl` (title,icon) VALUES ('$title','$icon')";
        $query = $pdo->prepare($sql);
        $query->execute();
    }
}


function get_widgets()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `widget_|tbl` ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}


function single_widget($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `widget_|tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

function delete_widget($id)
{
    $pdo = connect_db();
    $sql = "DELETE FROM `widget_|tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();


}

function update_widget($info, $id)
{
    $title = $info['title'];
    $icon = $info['icon'];
    $pdo = connect_db();
    $sql = "UPDATE `widget_|tbl` SET
            `title`='$title',`icon`='$icon' WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    header('location:' . $_SERVER['REQUEST_URI']);
}


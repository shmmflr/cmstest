<?php
include_once 'connect.php';
function add_category($info)
{
    $title = $info['title'];
    $sort = $info['sort'];
    $parent = $info['parent'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = 'off';
    }
    $pdo = connect_db();
    $sql = "INSERT INTO `category_tbl` (title,sort,parent,status) VALUES ('$title','$sort','$parent','$status')";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function main_category()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent=0";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function sub_category($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function sub_subcategory_cat($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function single_category($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

function update_category($info, $id)
{
    $title = $info['title'];
    $sort = $info['sort'];
    $parent = $info['parent'];
    if (isset($info['status'])) {
        $status = $info['status'];
    } else {
        $status = 'off';
    }
    $pdo = connect_db();
    $sql = "UPDATE `category_tbl` SET 
            `title`='$title',`sort`='$sort',`parent`='$parent',`status`='$status'
            WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    header('location:dashboard.php?page=list_category');
}

function delete_category($id)
{
    $pdo = connect_db();
    $sql = "DELETE FROM `category_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;

}

function all_category()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

//**************** نمایش منوها **********************
function main_menu()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent=0 AND status='on' ORDER BY sort ASC ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function sub_menu($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent='$id' AND status='on' ORDER BY sort ASC ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function sub_submenu($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent='$id' AND status='on' ORDER BY sort ASC ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function post_category($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `post_tbl` WHERE cat_id LIKE '%$id%'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function title_category($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}
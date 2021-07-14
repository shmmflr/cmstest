<?php
include_once "connect.php";

function get_category()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent=0";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function get_subcategory($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function sub_subcategory($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE parent='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function add_post($info, $cat, $img)
{
    $title = $info['title'];
    $text = $info['text'];
    if (is_array($cat)) {
        $cat_id = implode(',', $cat);
    } else {
        $cat_id = $cat;
    }
    $author = $_SESSION['login'];
    $w_date = date("Y/m/d");
    $pdo = connect_db();
    $sql = "INSERT INTO `post_tbl` (title,text,cat_id,author,w_date,img) VALUES ('$title','$text','$cat_id','$author','$w_date','$img')";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function all_post()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `post_tbl`";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function post_cat($cat_id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `category_tbl` WHERE id IN ($cat_id)";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function delete_post($id)
{
    $pdo = connect_db();
    $sql = "DELETE FROM `post_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
//    $results = $query->fetchAll(PDO::FETCH_OBJ);
//    return $results;
}

function single_post($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `post_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetch(PDO::FETCH_OBJ);
    return $results;
}

function update_post($id, $info, $cat, $img)
{
    $title = $info['title'];
    $text = $info['text'];
    if (is_array($cat)) {
        $cat_id = implode(',', $cat);
    } else {
        $cat_id = $cat;
    }
    $author = $_SESSION['login'];
    $w_date = date("Y/m/d");
    $pdo = connect_db();
    $sql = "UPDATE `post_tbl` SET title='$title',text='$text',cat_id='$cat_id',author='$author',w_date='$w_date',img='$img' WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    header("location:" . $_SERVER['REQUEST_URI']);
}

//**********comment**********//
function comment_post($text, $post_id)
{
    $pdo = connect_db();
    $author = $_SESSION['login'];
    $sql = "INSERT INTO comment_tbl (text,author,post_id) VALUES ('$text','$author',$post_id)";
    $query = $pdo->prepare($sql);
    $query->execute();
    header("location:" . $_SERVER['REQUEST_URI']);
}

function get_comment($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM comment_tbl WHERE post_id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
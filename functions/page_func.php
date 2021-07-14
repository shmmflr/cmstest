<?php
include_once 'connect.php';

function about_as()
{
    $pdo = connect_db();
    $query = $pdo->prepare('SELECT * FROM `about_tbl`');
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function add_about_as($id, $info)
{

    $about = about_as();

    $title = $info['title'];
    $description = $info['description'];


    if ($about['id'] == "") {
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO `about_tbl`(`title`, `description`) VALUES ('$title','$description')");
        $query->execute();
    } else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE about_tbl SET title='$title',description='$description' WHERE id='$id'");
        $query->execute();
    }

}


function about_footer()
{
    $pdo = connect_db();
    $query = $pdo->prepare('SELECT * FROM `abuot_footer_tbl`');
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function add_about_footer($id, $info)
{

    $about_footer = about_footer();

    $about = $info['about'];
    $copyright = $info['copyright'];


    if ($about_footer['id'] == "") {
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO `abuot_footer_tbl`(`about`, `copyright`) VALUES ('$about','$copyright')");
        $query->execute();
    } else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE abuot_footer_tbl SET about='$about',copyright='$copyright' WHERE id='$id'");
        $query->execute();
    }

}


function single_post_index()
{
    $pdo = connect_db();
    $query = $pdo->prepare('SELECT * FROM `single_post_tbl`');
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function add_single_post($id, $info)
{

    $single_post = single_post_index();

    $title = $info['title'];
    $content = $info['content'];
    $btn1 = $info['btn1'];
    $btn2 = $info['btn2'];
    $video = $info['video'];


    if ($single_post['id'] == "") {
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO `single_post_tbl`(`title`, `content`,`btn1`,`btn2`,`video`) 
                        VALUES ('$title','$content','$btn1','$btn2','$video')");
        $query->execute();
    } else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE `single_post_tbl` SET `title`='$title',`content`='$content',`btn1`='$btn1',`btn2`='$btn2',`video`='$video' WHERE id='$id'");
        $query->execute();
    }

}

function top_header()
{
    $pdo = connect_db();
    $query = $pdo->prepare('SELECT * FROM `top_header_tbl`');
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function add_top_header($id, $info, $img)
{

    $single_post = top_header();

    $title = $info['title'];
    $description = $info['description'];


    if ($single_post['id'] == "") {
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO `top_header_tbl`(`title`, `description`,`img`) 
                        VALUES ('$title','$description','$img')");
        $query->execute();
    } else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE `top_header_tbl` SET
                            `title`='$title',`description`='$description' ,`img`='$img' WHERE id='$id'");
        $query->execute();
    }

}

function admin_message()
{
    $pdo = connect_db();
    $query = $pdo->prepare('SELECT * FROM `admin_message_tbl`');
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function add_admin_message($id, $info)
{

    $admin_message = admin_message();

    $message = $info['message'];



    if ($admin_message['id'] == "") {
        $pdo = connect_db();
        $query = $pdo->prepare("INSERT INTO `admin_message_tbl`(`message`) 
                        VALUES ('$message')");
        $query->execute();
    } else {
        $pdo = connect_db();
        $query = $pdo->prepare("UPDATE `admin_message_tbl` SET
                            `message`='$message' WHERE id='$id'");
        $query->execute();
    }

}
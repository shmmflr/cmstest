<?php
include_once 'connect.php';

function user_register($info)
{
    $user = $info['username'];
    $pass = sha1($info['password']);
    $email = $info['email'];
    $role = $info['role'];
    $pdo = connect_db();
    $sql = "INSERT INTO `user_tbl` (username,password,email,roles) VALUES ('$user','$pass','$email','$role')";
    $query = $pdo->prepare($sql);
    $query->execute();

}


function user_login($info)
{
    $user = $info['username'];
    $pass = sha1($info['password']);
    $pdo = connect_db();
    $sql = "SELECT * FROM `user_tbl` WHERE `username`='$user'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);

    if ($result) {
        if ($result->password == $pass) {
            $_SESSION['login'] = $result->username;
            header('location:panel/dashboard.php');
        } else {
            echo "<h3 class='text-center alert alert-danger'>رمز ورود اشتباه است!</h3>";
        }
    } else {
        echo "<h3 class='text-center alert alert-danger'> نام کاربری نادرست می باشد!</h3>";
    }
}

function user_list()
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `user_tbl`";
    $query = $pdo->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    return $results;
}

function delete_user($id)
{
    $pdo = connect_db();
    $sql = "DELETE FROM `user_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();

}

function single_user($id)
{
    $pdo = connect_db();
    $sql = "SELECT * FROM `user_tbl` WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

function update_user($id, $info, $pass)
{
    $user = $info['username'];
    $email = $info['email'];
    $role = $info['role'];
    $pdo = connect_db();
    $sql = "UPDATE `user_tbl` SET `username`='$user',`password`='$pass',`email`='$email',`roles`='$role' WHERE id='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    header("location:" . $_SERVER['REQUEST_URI']);
}
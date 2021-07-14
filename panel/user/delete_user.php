<?php
include_once '../functions/user_func.php';
$id = $_GET['id'];
delete_user($id);
header('location:dashboard.php?page=list_users');

<?php
include_once '../functions/post_func.php';
$id = $_GET['id'];
delete_post($id);
header('location:dashboard.php?page=list_post&del=ok');
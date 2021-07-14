<?php
include_once '../functions/category_func.php';
$id = $_GET['id'];
delete_category($id);
header('location:dashboard.php?page=list_category&del=ok');

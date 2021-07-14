<?php
include_once '../functions/widget_func.php';
$id = $_GET['id'];
delete_widget($id);
header('location:dashboard.php?page=list_widget&del=ok');

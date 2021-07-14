<?php
include_once '../functions/slider_func.php';
$id = $_GET['id'];
delete_slider($id);
header('location:dashboard.php?page=list_slider');
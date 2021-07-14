<?php
include_once '../functions/footer_func.php';
$id = $_GET['id'];
delete_footer_menu($id);
header('location:dashboard.php?page=list_footer_menu&del=ok');
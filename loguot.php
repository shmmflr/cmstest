<?php
require_once 'header.php';

session_destroy();
header('location:login.php');
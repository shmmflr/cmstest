<?php
ob_start();
session_start();
include_once 'functions/category_func.php';
require_once 'functions/page_func.php';
$th = top_header();
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $th['description'] ?>">
    <title><?php echo $th['title'] ?></title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<div class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 logo">
                <a href="index.php">
                    <img src="<?php
                    $loc_logo = $th['img'];
                    $nt = explode('/', $loc_logo);
                    $name = end($nt);
                    $url = "http://localhost/Function/upload/logo/" . $name;
                    echo $url;
                    ?>" width="160" height="50">
                </a>
            </div>
            <div class="col-md-6 link">

                <?php
                if (!isset($_SESSION['login'])) :?>

                    <a href="login.php" class="login">ورود به سایت</a>
                    <a href="register.php" class="sabtnam">ثبت نام کنید</a>

                <?php endif; ?>
                <?php
                if (isset($_SESSION['login'])) :?>

                    <a href="panel/dashboard.php" class="login">نمایش پنل</a>
                    <a href="loguot.php" class="sabtnam bg-danger">خروج</a>

                <?php endif; ?>

            </div>


            <aside class="menu-bar">
                <nav id="menu_item">
                    <ul class="menu">
                        <?php
                        $menu = main_menu();
                        foreach ($menu

                                 as $val):
                            ?>
                            <li>
                                <a href="category.php?id=<?php echo $val->id ?>" dideo-checked="true">
                                    <?php echo $val->title ?>
                                </a>
                                <?php
                                $sub_menu = sub_menu($val->id);
                                if ($sub_menu):

                                    ?>
                                    <ul class="sub-menu">
                                        <?php
                                        foreach ($sub_menu

                                                 as $sub):
                                            ?>
                                            <li>
                                                <a href="category.php?id=<?php echo $sub->id ?>"
                                                   dideo-checked="true" class="font-weight-bold">
                                                    <?php echo $sub->title ?>
                                                </a>
                                                <?php
                                                $sub_submenu = sub_submenu($sub->id);
                                                if ($sub_submenu):

                                                    ?>
                                                    <ul>
                                                        <?php
                                                        foreach ($sub_submenu

                                                                 as $subsub):
                                                            ?>
                                                            <li>
                                                                <a href="category.php?id=<?php echo $subsub->id ?>"
                                                                   dideo-checked="true">
                                                                    <?php echo $subsub->title ?>
                                                                </a>

                                                            </li>

                                                        <?php endforeach; ?>

                                                    </ul>
                                                <?php endif; ?>
                                            </li>

                                        <?php endforeach; ?>

                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </aside>
        </div>
    </div>
</div>
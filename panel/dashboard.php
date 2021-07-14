<?php
ob_start();
session_start();
require_once '../functions/public_func.php';
if (!isset($_SESSION['login'])) {
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.css">

</head>

<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" target="_blank" href="../index.php">نمایش سایت</a>
                <a class="btn btn-danger" href="../loguot.php">خروج</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">
            <?php
            include_once 'dash_menu.php';
            ?>

            <div class="col-md-10">
                <div class="content-panel">
                    <div class="container-fluid">
                        <?php
                        if (isset($_GET['page'])) {
                            
                            switch ($_GET['page']) {
                                case 'add_category':
                                    include_once 'category/add_category.php';
                                    break;
                                case 'list_category':
                                    include_once 'category/list_category.php';
                                    break;
                                case 'update_cat':
                                    include_once 'category/update_cat.php';
                                    break;
                                case 'delete_cat':
                                    include_once 'category/delete_cat.php';
                                    break;

                                case 'list_post':
                                    include_once 'post/list_post.php';
                                    break;
                                case 'add_post':
                                    include_once 'post/add_post.php';
                                    break;
                                case 'delete_post':
                                    include_once 'post/delete_post.php';
                                    break;
                                case 'update_post':
                                    include_once 'post/update_post.php';
                                    break;
                                case 'list_slider':
                                    include_once 'slider/list_slider.php';
                                    break;
                                case 'add_slider':
                                    include_once 'slider/add_slider.php';
                                    break;
                                case 'delete_slider':
                                    include_once 'slider/delete_slider.php';
                                    break;
                                case 'update_slider':
                                    include_once 'slider/update_slider.php';
                                    break;
                                case 'update_widget':
                                    include_once 'widget/update_widget.php';
                                    break;
                                case 'list_widget':
                                    include_once 'widget/list_widget.php';
                                    break;
                                case 'delete_widget':
                                    include_once 'widget/delete_widget.php';
                                    break;
                                case 'add_widget':
                                    include_once 'widget/add_widget.php';
                                    break;
                                case 'admin_message':
                                    include_once 'page/admin_message.php';
                                    break;
                                case 'about_page':
                                    include_once 'page/about_page.php';
                                    break;

                                case 'about_footer':
                                    include_once 'page/about_footer.php';
                                    break;
                                case 'single_post':
                                    include_once 'page/single_post.php';
                                    break;
                                case 'top_header':
                                    include_once 'page/top_header.php';
                                    break;
                                case 'add_footer_menu':
                                    include_once 'footer/add_footer_menu.php';
                                    break;
                                case 'list_footer_menu':
                                    include_once 'footer/list_footer_menu.php';
                                    break;
                                case 'update_footer_menu':
                                    include_once 'footer/update_footer_menu.php';
                                    break;
                                case 'delete_footer_menu':
                                    include_once 'footer/delete_footer_menu.php';
                                    break;
                                case 'add_user':
                                    include_once 'user/add_user.php';
                                    break;
                                case 'list_users':
                                    include_once 'user/list_users.php';
                                    break;
                                case 'update_user':
                                    include_once 'user/update_user.php';
                                    break;
                                case 'delete_user':
                                    include_once 'user/delete_user.php';
                                    break;

                            }
                        } else {
                            require_once 'main_dashboard.php';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>

<script src="../js/tinymce.min.js" referrerpolicy="origin"></script>
<!--<script type="text/javascript">-->
<!--    tinymce.init({-->
<!--        selector: "textarea",-->
<!--        language: 'fa',-->
<!--        plugins: 'link',-->
<!--        menubar: false,-->
<!--        font_formats: "IRANSansWeb=IRANSansWeb",-->
<!--        toolbar: "undo redo | fontsizeselect fontselect |copy cut paste | selectall remove |backcolor forecolor| bold italic underline | link image alignleft aligncenter alignright ltr rtl",-->
<!--        statusbar: false,-->
<!--        // plugins: 'advlist autolink link image lists charmap print preview',-->
<!--        paste_auto_cleanup_on_paste: true,-->
<!--        paste_postprocess: function (pl, o) {-->
<!--            o.node.innerHTML = o.node.innerHTML.replace(/&nbsp;/ig, " ");-->
<!--        }-->
<!--    });-->
<!--</script>-->


</body>

</html>
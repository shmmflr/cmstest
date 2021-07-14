<?php
require_once 'functions/footer_func.php';
$list_footer_menu = show_footer_menu();
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 box-footer">
                <h5>دسترسی سریع</h5>
                <div class="top-bar">
                    <div class="right-top-bar">
                        <?php
                        $list_footer_menu = show_footer_menu();
                        foreach ($list_footer_menu

                                 as $list_menu):
                            if ($list_menu->status == 'on'):
                                ?>
                                <ul>
                                    <li id="menu-item-69" class="menu-item"><a title="<?php echo $list_menu->title ?>"
                                                                               href="<?php echo $list_menu->url ?>"
                                                                               dideo-checked="true"><?php echo $list_menu->title ?></a>
                                    </li>

                                </ul>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                </div>


            </div>
            <?php
            require_once 'functions/page_func.php';
            $about_footer = about_footer();
            ?>
            <div class="col-md-6 box-footer">
                <h5>درباره وبسافت3</h5>
                <div class="top-bar">
                    <div class="right-top-bar">
                        <div class="textwidget">
                            <?php echo $about_footer['about'] ?>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-12 d-flex justify-content-center align-items-center p-2 copy-right">
                <?php echo $about_footer['copyright'] ?>
            </div>

        </div>
    </div>
</footer>


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="../js/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        language: 'fa',
        plugins: 'link',
        menubar: false,
        font_formats: "IRANSansWeb=IRANSansWeb",
        toolbar: "undo redo | fontsizeselect fontselect |copy cut paste | selectall remove |backcolor forecolor| bold italic underline | link image alignleft aligncenter alignright ltr rtl",
        statusbar: false,
        // plugins: 'advlist autolink link image lists charmap print preview',
        paste_auto_cleanup_on_paste: true,
        paste_postprocess: function (pl, o) {
            o.node.innerHTML = o.node.innerHTML.replace(/&nbsp;/ig, " ");
        }
    });
</script>

</body>
</html>
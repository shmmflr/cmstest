<?php include_once 'header.php';
require_once 'functions/page_func.php';
$about = about_as();
?>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="post-single">
                    <div class="post-title-single"><h1><?php echo $about['title'] ?></h1></div>
                    <div class="clearfix"></div>
<!--                    <div class="thumb-single-product"><img src="img/default.jpg"-->
<!--                                                           class="attachment-medium size-medium wp-post-image" alt="">-->
<!--                    </div>-->

                    <div class="post-txt-single">
                        <p>
                            <?php echo $about['description'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
<?php include "footer.php"; ?>
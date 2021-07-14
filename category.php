<?php
require_once 'header.php';
require_once 'functions/category_func.php';
$id = $_GET['id'];
$post_category = post_category($id);
$title = title_category($id);

?>
<?php if ($post_category):
    ?>
    <div class="title-main">
        <h4>دسته بندی ها مطالب
            برای <?php
            echo "<span class='text-black-50'> $title->title</span>"
            ?>
        </h4>
    </div>
<?php endif; ?>
    <div class="container-fluid post-container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <?php if (!$post_category):
                        ?>
                        <div>
                            <h2 class="alert alert-info text-center mt-5"> هیچ مطلبی درباره <?php echo $title->title ?> ثبت
                                نشده است</h2>
                        </div>

                    <?php endif; ?>
                    <?php
                    foreach ($post_category as $post) :
                        ?>


                        <article class="post">
                            <div class="thumb">
                                <img src="<?php
                                $loc_img = $post->img;
                                $nt = explode('/', $loc_img);
                                $picname = end($nt);
                                $url = "http://localhost/Function/upload/" . $picname;
                                echo $url;
                                ?>" width="260" height="150">
                            </div>
                            <div class="post-title">
                                <h2><a target="_blank" href="single.php?id=<?php echo $post->id ?>"
                                       dideo-checked="true"><?php echo $post->title ?></a>
                                </h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="post-txt">
                                <h4>
                                    <?php echo $post->text ?>
                                </h4>
                            </div>
                            <div class="post-foot-container">
                                <div class="line-border"></div>
                                <div class="p-c-view"><i class="fa fa-eye"></i><?php echo $post->w_date ?></div>

                                <div class="p-c-view"><i class="fa fa-comment"></i> نویسنده
                                    :<?php echo $post->author ?>
                                </div>
                            </div>
                        </article>


                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
<?php
require_once 'footer.php';

?>
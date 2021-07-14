<?php
include_once 'header.php';

?>

    <div class="main">
        <div class="main-slider">
            <div class="owl-carousel owl-theme">
                <?php
                require_once 'functions/slider_func.php';
                $sliders = show_slider();
                foreach ($sliders

                         as $slider):
                    ?>
                    <div class="item">
                        <a target="_blank" href="<?php echo $slider->url ?>">
                            <img src="
                            <?php
                            $loc_img = $slider->img;
                            $nt = explode('/', $loc_img);
                            $picname = end($nt);
                            $url = 'http://localhost/Function/upload/slider/' . $picname;
                            echo $url;
                            ?>" width="100%" alt="bootstrap course"/></a>
                        <span><a href="<?php echo $slider->url ?>"><?php echo $slider->title; ?></a> </span>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                require_once 'functions/widget_func.php';

                $widgets = get_widgets();
                foreach ($widgets as $widget):
                    ?>
                    <div class="col-md-2 widget">
                        <span class="fa-4x <?php echo $widget->icon ?>"></span>
                        <span><?php echo $widget->title ?></span>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="container-fluid post-tak">
        <div class="container">
            <div class="row">
                <?php
                require_once 'functions/page_func.php';
                $sp = single_post_index();
                ?>
                <div class="col-md-12">
                    <div class="col-md-5 video-box">
                        <?php echo $sp['video'] ?>
                    </div>
                    <div class="col-md-7 content-box">
                        <h3><?php echo $sp['title'] ?></h3>
                        <p>
                            <?php echo $sp['content'] ?>
                        </p>
                        <div class="link-single">
                            <a href="<?php echo $sp['btn1'] ?>" class="login"> اطلاعات بیشتر</a>
                            <a href="<?php echo $sp['btn2'] ?>" class="sabtnam">ثبت نام در دوره</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="title-main">
        <h4>آخرین مطالب آموزشی</h4>
    </div>

    <div class="container-fluid post-container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <?php
                    include_once 'functions/post_func.php';
                    $posts = all_post();
                    //                    var_dump($posts);
                    //                    die();
                    foreach ($posts as $post):
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

                                <div class="p-c-view"><i class="fa fa-comment"></i> نویسنده :<?php echo $post->author ?>
                                </div>
                            </div>
                        </article>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
<?php include_once 'footer.php'; ?>
<?php include_once 'header.php';
require_once 'functions/post_func.php';
$id = $_GET['id'];
$post = single_post($id);
?>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="post-single">
                    <div class="post-title-single"><h1><?php echo $post->title; ?></h1>
                        <div class="clearfix"></div>
                        <div class="entry-meta">

                            <div class="view">

                                دسته بندی :
                                <ul class="post-categories">
                                    <li>
                                        <?php
                                        $cat_id = post_cat($post->cat_id);
                                        foreach ($cat_id as $cat) :
                                            ?>
                                            <a href="category.php?id=<?php echo $cat->id ?>" rel="category tag">
                                                <?php echo $cat->title . " ," ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                            </div>

                            <div class="view"><i class="fa fa-comment"></i>
                                منتشر شده در : <?php echo $post->w_date ?>
                            </div>
                            <div class="view"><i
                                        class="fa fa-user"></i><span> نویسنده :<?php echo $post->author ?>  </span>
                            </div>
                            <div class="view"><i
                                        class="fa fa-user"></i><span>  آیدی مقاله : <?php echo $post->id ?></span>
                            </div>
                        </div>

                    </div>


                    <div class="clearfix"></div>
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <div class="post-txt-single">
                                <p>
                                    <?php echo $post->text; ?>

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="thumb-single-product">
                                <img src="<?php
                                $location_img = $post->img;
                                $nt = explode('/', $location_img);
                                $name = end($nt);
                                $url = "http://localhost/Function/upload/" . $name;
                                echo $url;
                                ?>"
                                     class="attachment-medium size-medium wp-post-image" alt="">
                            </div>


                        </div>


                    </div>
                </div>

                <div class="box-comment">
                    <h3>نظر خود را در رابطه با این مقاله وارد کنید</h3>
                    <?php if (!isset($_SESSION['login'])) : ?>
                        <h3>برای ثبت نظر ابتدا باید
                            <a class="btn btn-warning" href="login.php">وارد شوید</a>
                            یا
                            <a class="btn btn-primary" href="register.php"> ثبت نام کنید </a>
                            کنید
                        </h3>

                    <?php endif; ?>
                    <?php
                    $comments = get_comment($id);
                    foreach ($comments as $item):

                        ?>
                        <div class="comment">
                            <img src="img/user.png">
                            <h5><?php echo $item->author; ?></h5>
                            <p><?php echo $item->text; ?></p>
                        </div>
                    <?php endforeach; ?>

                    <div class="clearfix"></div>
                    <br>
                    <br>
                    <?php if (isset($_SESSION['login'])) :
                        if (isset($_POST['send'])) {
                            $text = $_POST['text'];

                            comment_post($text, $id);
                        }
                        ?>
                        <form method="post">
                            <span>متن نظر شما</span>
                            <textarea name="text" id="text" aria-hidden="true"></textarea>
                            <input type="submit" name="send" class="btn btn-success" value="ثبت نظر">
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
<?php include_once 'footer.php'; ?>
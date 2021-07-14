<?php

require_once '../functions/page_func.php';
$sp = single_post_index();

$id = $sp['id'];
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    add_single_post($id, $info);
    header("location:" . $_SERVER['REQUEST_URI']);
}
?>

<div class="col-12">
    <form class="my-form" method="post">
        <div class="row">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-12 widget_admin">
                        <br>
                        <br>

                        <span>عنوان</span>
                        <input class="form-control mt-2"
                               name="info[title]" value="<?php echo $sp['title']; ?>">
                        <br>

                        <span> توضیحات </span>
                        <textarea class="form-control mt-2" rows="12"
                                  name="info[content]"><?php echo $sp['content']; ?></textarea>
                        <br>
                        <br>

                        <span>لینک دکمه اول </span>
                        <input class="form-control mt-2"
                               name="info[btn1]" value="<?php echo $sp['btn1'] ?>">
                        <br> <br>

                        <span>لینک دکمه دوم </span>
                        <input class="form-control mt-2"
                               name="info[btn2]" value="<?php echo $sp['btn2'] ?>">
                        <br><br>

                        <span>لینک ویدئو </span>
                        <input class="form-control mt-2"
                               name="info[video]"  value="<?php echo $sp['video'];?>">
                        <br>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary w-25" value="ارسال" name="send">
                </div>
            </div>
        </div>
    </form>

</div>

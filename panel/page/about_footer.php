<?php

require_once '../functions/page_func.php';
$about = about_footer();

$id = $about['id'];
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    add_about_footer($id, $info);
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

                        <span>متن درباره ما</span>
                        <textarea class="form-control mt-2" rows="12"
                                  name="info[about]"><?php echo $about['about']; ?></textarea>
                        <br>

                        <span> متن کپی رایت </span>
                        <textarea class="form-control mt-2" rows="12"
                                  name="info[copyright]"><?php echo $about['copyright']; ?></textarea>
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


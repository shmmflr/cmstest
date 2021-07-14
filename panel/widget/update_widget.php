<?php
//برای اینکه بتوان به این تابع همجا دسترسی داشته باشم باید خاج از شرط زیر قرار بگیره.
include_once '../functions/widget_func.php';
$id = $_GET['id'];
$widget = single_widget($id);
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    update_widget($info, $id);
}
?>

<div class="col-12">
    <p class="title-form">ویرایش ابزاک</p>
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-12 widget_admin">
                        <span>عنوان ابزارک</span>
                        <input class="form-control inputbig mt-2" type="text" name="info[title]"
                               placeholder="عنوان را اینجا وارد کنید" value="<?php echo $widget->title ?>">
                        <br>

                        <span> کد آیکون</span>
                        <textarea class="form-control mt-2" name="info[icon]"><?php echo $widget->icon ?></textarea>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" id="widget_admin">
                    </div>
                </div>

                <div class="w-100 d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary w-25" value="ارسال" name="send">
                </div>
            </div>
        </div>
    </form>

</div>
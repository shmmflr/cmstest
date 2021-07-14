<?php
//برای اینکه بتوان به این تابع همجا دسترسی داشته باشم باید خاج از شرط زیر قرار بگیره.
include_once '../functions/widget_func.php';
if (isset($_POST['send'])) {

    $titles = $_POST['title'];
    $icons = $_POST['icon'];
    add_widget($titles, $icons);
}
?>

<div class="col-12">
    <p class="title-form">افزودن دسته جدید</p>
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10">

                <div class="w-100 d-flex justify-content-start">
                    <span class="btn btn-danger w-25" onclick="add_widget()">
                        اضافه کردن فرم جدید
                        <span>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-12 widget_admin">
                        <span>عنوان ابزارک</span>
                        <input class="form-control inputbig mt-2" type="text" name="title[0]"
                               placeholder="عنوان را اینجا وارد کنید">
                        <br>

                        <span> کد آیکون</span>
                        <textarea class="form-control mt-2" name="icon[0]"></textarea>
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
<script>
    function add_widget() {
        var count = document.getElementsByClassName('count-widget').length + 1;
        var widget =
            '<hr/><div class="count-widget">' +
            '<span>عنوان ابزارک</span>' +
            '<input class="form-control inputbig mt-2" type="text" name="title[' + count + ']" placeholder="عنوان را اینجا وارد کنید">' +
            '<br><span>کد آیکون : </span>' +
            '<textarea class="form-control mt-2" name="icon[' + count + ']"></textarea>' +
            '<hr><br></div>';

        $('#widget_admin').append(widget);
    }
</script>
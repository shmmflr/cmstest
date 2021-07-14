<?php

include_once '../functions/public_func.php';
include_once '../functions/slider_func.php';
if (isset($_POST['send'])) {
    $file = $_FILES['image'];
    $loc = '../upload/slider/SLI';
    $img = uploaded($file, $loc);
    $info = $_POST['info'];
    add_slider($info, $img);
}
?>

<div class="row">

    <div class="col-md-12">
        <p class="title-form">افزودن اسلایدر جدید</p>
        <form class="my-form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">


                    <input class="form-control inputbig" type="text" name="info[title]"
                           placeholder="عنوان را اینجا وارد کنید">
                    <br>
                    <input class="form-control inputbig" type="text" name="info[url]"
                           placeholder="url">


                    <br>
                    <!--        image          -->
                    <div class="box-widget">
                        <h5>تصویر شاخص</h5>
                        <label for="upload" class="upload_label text-center">
                            <span class="fa fa-camera fa-2x" aria-hidden="true"></span>
                            <input type="file" id="upload" name="image" style="display:none">
                        </label>
                    </div>

                    <br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="info[status]" checked>
                        <label class="custom-control-label" for="status">فعال/غیر فعال</label>
                    </div>
                    <br>
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary w-25" name="send" type="submit">
                            انتشار اسلایدر
                        </button>
                    </div>


                </div>


            </div>
        </form>
    </div>

</div>
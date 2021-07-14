<?php

include_once '../functions/footer_func.php';
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    add_footer_menu($info);
}
?>

<div class="row">

    <div class="col-md-12">
        <p class="title-form">افزودن فوتر منوی جدید</p>
        <form class="my-form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">


                    <input class="form-control inputbig" type="text" name="info[title]"
                           placeholder="عنوان را اینجا وارد کنید">
                    <br>
                    <input class="form-control inputbig" type="text" name="info[url]"
                           placeholder="url">


                    <br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="info[status]" checked>
                        <label class="custom-control-label" for="status">فعال/غیر فعال</label>
                    </div>
                    <br>
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary w-25" name="send" type="submit">
                            انتشار فوتر منو
                        </button>
                    </div>


                </div>


            </div>
        </form>
    </div>

</div>
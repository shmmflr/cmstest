<?php
include_once '../functions/public_func.php';
include_once '../functions/slider_func.php';
$id = $_GET['id'];
$slider = single_slider($id);
if (isset($_POST['update'])) {
    $file = $_FILES['image'];
    if (!$file['name'] == '') {
        $img = uploaded($file, '../upload/');
    } else {
        $img = $slider->img;
    }
    $info = $_POST['info'];
    update_slider($id, $info, $img);
    header("location:" . $_SERVER['REQUEST_URI']);
}
?>

<div class="row">

    <div class="col-md-12">
        <p class="title-form">ویرایش اسلایدر</p>
        <form class="my-form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">


                    <input class="form-control inputbig" type="text" name="info[title]"
                           placeholder="عنوان را اینجا وارد کنید"
                           value="<?php echo $slider->title; ?>"
                    >

                    <br>
                    <input class="form-control inputbig" type="text" name="info[url]"
                           placeholder="url" value="<?php echo $slider->url ?>">

                    <br>
                    <!--        image          -->
                    <div class="box-widget">
                        <h5>تصویر شاخص</h5>
                        <img src="<?php echo $slider->img; ?>" width="100%" height="100%" alt="post">

                        <label for="upload" class="upload_label text-center mt-3">
                            <span class="fa fa-camera fa-2x" aria-hidden="true"></span>
                            <input type="file" id="upload" name="image" style="display:none">
                        </label>
                    </div>
                    <br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="info[status]"
                            <?php if ($slider->status == 'on')
                                echo " checked "; ?>
                        >
                        <label class="custom-control-label" for="status">فعال/غیر فعال</label>
                    </div>
                    <br>
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary w-25" name="update" type="submit">
                            ذخیره تغییرات
                        </button>
                    </div>

                </div>

            </div>
        </form>
    </div>

</div>
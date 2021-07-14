<?php
include_once '../functions/public_func.php';
require_once '../functions/page_func.php';
$th = top_header();

$id = $th['id'];
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    $file = $_FILES['image'];
    if (!$file['name'] == '') {
        $img = uploaded($file, '../upload/logo/LOGO');
    } else {
        $img = "http://127.0.0.1/Function/img/logo.png";
    }
//    var_dump($th);
//    die();
    add_top_header($id, $info, $img);
    header("location:" . $_SERVER['REQUEST_URI']);
}
?>

<div class="col-12">
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-12 widget_admin">
                        <br>
                        <br>

                        <span>عنوان</span>
                        <input class="form-control mt-2"
                               name="info[title]" value="<?php echo $th['title']; ?>">
                        <br>

                        <span>توضیحات سایت </span>
                        <textarea class="form-control mt-2" rows="12"
                                  name="info[description]"><?php echo $th['description']; ?></textarea>
                        <br>
                    </div>
                    <!--        image          -->
                    <div class="box-widget w-100">
                        <h5>تصویر شاخص</h5>
                        <input type="file" name="image">
                        <img src="<?php echo $th['img'] ?>" width="auto" height="auto" alt="post">
                    </div>

                </div>
            </div>
            <div class="w-100 d-flex justify-content-end">
                <input type="submit" class="btn btn-primary w-25" value="ارسال" name="send">
            </div>
        </div>
</div>
</form>

</div>

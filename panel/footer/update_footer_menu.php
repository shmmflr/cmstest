<?php

include_once '../functions/footer_func.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $info = $_POST['info'];
    update_footer_menu($info, $id);
}
$single_footer = show_single_footer_menu($id);
?>

<div class="row">

    <div class="col-md-12">
        <p class="title-form">بروزرسانی فوتر منوی </p>
        <form class="my-form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">


                    <input class="form-control inputbig" type="text" name="info[title]"
                           placeholder="عنوان را اینجا وارد کنید" value="<?php echo $single_footer->title; ?>">
                    <br>
                    <input class="form-control inputbig" type="text" name="info[url]"
                           placeholder="url" value="<?php echo $single_footer->url; ?>">


                    <br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="info[status]"
                            <?php if ($single_footer->status == 'on') {
                                echo "checked";
                            } ?>
                        >
                        <label class="custom-control-label" for="status">فعال/غیر فعال</label>
                    </div>
                    <br>
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary w-25" name="update" type="submit">
                            بروزرسانی فوتر منو
                        </button>
                    </div>


                </div>


            </div>
        </form>
    </div>

</div>
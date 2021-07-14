<?php
include_once '../functions/post_func.php';
include_once '../functions/public_func.php';
if (isset($_POST['send'])) {
    $file = $_FILES['image'];
    $loc = '../upload/IMG';
    $img = uploaded($file, $loc);
    $info = $_POST['info'];
    $cat = $_POST['cat'];
    add_post($info, $cat, $img);
}
?>

<div class="row">

    <div class="col-md-12">
        <p class="title-form">افزودن پست جدید</p>
        <form class="my-form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">


                    <input class="form-control inputbig" type="text" name="info[title]"
                        placeholder="عنوان را اینجا وارد کنید">

                    <br>
                    <textarea class="form-control" name="info[text]" id="text" aria-hidden="true" rows="12"></textarea>

                    <br>
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary w-25" name="send" type="submit">
                            انتشار پست
                        </button>
                    </div>


                </div>

                <div class="col-md-3">
                    <div class="box-widget">
                        <h5>دسته : </h5>
                        <!-- category -->
                        <?php
                        include_once '../functions/post_func.php';
                        $patern = get_category();
                        foreach ($patern as $val) :
                            ?>
                        <div class="custom-control custom-checkbox">
                            <div class="boxcheck">
                                <input name="cat[]" value="<?php echo $val->id ?>" type="checkbox"
                                    class="custom-control-input" id="<?php echo $val->id ?>">
                                <label class="custom-control-label"
                                    for="<?php echo $val->id ?>"><?php echo $val->title ?></label>

                                <?php
                                    $sub_cat = get_subcategory($val->id);
                                    foreach ($sub_cat as $sub):
                                        ?>

                                <div class="custom-control custom-checkbox ">
                                    <div class="boxcheck">
                                        <i class="fa fa-arrow-left"></i>
                                        <input name="cat[]" value="<?php echo $sub->id ?>" type="checkbox"
                                            class="custom-control-input" id="<?php echo $sub->id ?>">
                                        <label class="custom-control-label"
                                            for="<?php echo $sub->id ?>"><?php echo $sub->title ?></label>
                                    </div>
                                </div>
                                <?php
                                        $sub_subcat = sub_subcategory($sub->id);
                                        foreach ($sub_subcat as $value):
                                            ?>

                                <div class="custom-control custom-checkbox ">
                                    <div class="boxcheck">
                                        <i class="fa fa-bullseye"></i><i class="fa fa-bullseye"></i>
                                        <input name="cat[]" value="<?php echo $value->id ?>" type="checkbox"
                                            class="custom-control-input" id="<?php echo $value->id ?>">
                                        <label class="custom-control-label"
                                            for="<?php echo $value->id ?>"><?php echo $value->title ?></label>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!--        image          -->
                    <div class="box-widget">
                        <h5>تصویر شاخص</h5>
                        <input type="file" name="image">
                    </div>

                </div>


            </div>
        </form>
    </div>

</div>
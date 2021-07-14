<?php
//برای اینکه بتوان به این تابع همجا دسترسی داشته باشم باید خاج از شرط زیر قرار بگیره.
include_once '../functions/category_func.php';
if (isset($_POST['send'])) {

    $info = $_POST['info'];
    add_category($info);
}
?>

<div class="col-12">
    <p class="title-form">افزودن دسته جدید</p>
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <label for="title">عنوان</label>
                        <input class="form-control inputbig" type="text" id="title" name="info[title]"
                               placeholder="عنوان را اینجا وارد کنید">
                    </div>
                    <div class="col-md-6">
                        <label for="sort">مرتب سازی</label>
                        <input class="form-control inputbig" type="text" id="sort" name="info[sort]"
                               placeholder="لطفا ترتیب را بصورت یک داده عددی وارد کنید">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="parent">گروه بندی </label>
                        <select class="form-control" name="info[parent]">
                            <option disabled selected>گروه بندی</option>
                            <option value="0">سرگروه</option>
                            <?php
                            $parent = main_category();
                            foreach ($parent as $item):
                                ?>
                                <option value="<?php echo $item->id ?>"> <?php echo $item->title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">

                        <label for="parent">زیر گروه بندی </label>
                        <select class="form-control" name="info[parent]">
                            <option selected disabled>زیر گروه بندی</option>
                            <?php
                            $parent = main_category();
                            foreach ($parent

                                     as $item):
                                $sub = sub_category($item->id);
                                foreach ($sub as $val):
                                    ?>
                                    <option value="<?php echo $val->id ?>"> <?php echo $val->title ?></option>

                                <?php endforeach; ?>

                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="info[status]" checked>
                    <label class="custom-control-label" for="status">فعال/غیر فعال</label>
                </div>
                <br>
                <div class="w-100 d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary w-25" value="ارسال" name="send">
                </div>
            </div>
        </div>
    </form>

</div>
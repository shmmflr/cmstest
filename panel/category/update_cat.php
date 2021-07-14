`<?php
include_once '../functions/category_func.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $info = $_POST['info'];
    update_category($info, $id);
}
$cat = single_category($id);


?>

<div class="col-12">
    <p class="title-form">ویرایش دسته ها</p>
    <form class="my-form" method="post">
        <div class="row">
            <div class="col-md-10">
                <div class="row">

                    <div class="col-md-6">
                        <label for="title">عنوان</label>
                        <input class="form-control inputbig" type="text" id="title" name="info[title]"
                               value="<?php echo $cat->title ?>"
                               placeholder="عنوان را اینجا وارد کنید">

                    </div>
                    <div class="col-md-6">
                        <label for="sort">مرتب سازی</label>
                        <input class="form-control inputbig" type="text" id="sort" name="info[sort]"
                               value="<?php echo htmlentities($cat->sort) ?>"
                               placeholder="لطفا ترتیب را بصورت یک داده عددی وارد کنید">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="parent">گروه بندی </label>
                        <select class="form-control" name="info[parent]">
                            <option selected disabled>انتخاب گروه بندی</option>
                            <option value="0">سرگروه</option>
                            <?php
                            $parent = main_category();
                            foreach ($parent as $item):
                                ?>
                                <option value="<?php echo $item->id ?>"
                                    <?php if ($cat->parent == $item->id) echo "selected" ?>
                                > <?php echo $item->title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="parent">انتخاب زیر گروه بندی </label>
                        <select class="form-control" name="info[parent]">
                            <option selected disabled>زیر گروه بندی</option>
                            <?php
                            $parent = main_category();
                            foreach ($parent

                                     as $item):
                                $sub = sub_category($item->id);
                                foreach ($sub as $val):
                                    ?>
                                    <option value="<?php echo $val->id ?>"
                                        <?php if ($cat->parent == $val->id) echo "selected" ?>
                                    > <?php echo $val->title ?></option>

                                <?php endforeach; ?>

                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="info[status]"
                        <?php if ($cat->status == 'on')
                            echo " checked "; ?>
                    >
                    <label class="custom-control-label" for="status">فعال/غیر فعال</label>
                </div>
                <br>
                <div class="w-100 d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary w-25" value="ویرایش اطلاعات" name="update">
                </div>
            </div>
        </div>
    </form>

</div>
`
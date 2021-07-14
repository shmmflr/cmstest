<?php
include_once '../functions/user_func.php';
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    user_register($info);

}

?>

<div class="col-12">
    <p class="title-form">افزودن کاربر جدید</p>
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class=" col-md-6">
                        نام کاربری : <br>
                        <input type="text" name="info[username]" class="form-control" required><br>
                    </div>
                    <div class=" col-md-6">

                        رمز عبور : <br>
                        <input type="password" name="info[password]" class="form-control" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                        ایمیل : <br>
                        <input type="email" name="info[email]" class="form-control" required><br>

                    </div>
                    <div class=" col-md-6">
                        سطح دسترسی : <br>
                        <select name="info[role]" class="form-control">
                            <option value="admin">مدیر</option>
                            <option value="author">نویسنده</option>
                            <option value="normal" selected>کاربر عادی</option>
                        </select>
                    </div>
                </div>
                <hr>

                <div class="w-100 d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary w-25" value="ارسال" name="send">
                </div>
            </div>
        </div>
    </form>

</div>

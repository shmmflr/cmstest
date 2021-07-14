<?php
include_once '../functions/user_func.php';
$id = $_GET['id'];
$su = single_user($id);
if (isset($_POST['send'])) {
    if (isset($_POST['password'])) {
        $pass = sha1($_POST['password']);
    } else {
        $pass = $su->password;
    }
    $info = $_POST['info'];
    update_user($id, $info, $pass);
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
                        <input type="text" name="info[username]" class="form-control" required
                               value="<?php echo $su->username ?>"><br>
                    </div>
                    <div class=" col-md-6">

                        رمز عبور : <br>

                        <input class="form-control" type="text" name="password">
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                        ایمیل : <br>
                        <input type="email" name="info[email]" class="form-control" required
                               value="  <?php echo $su->email ?>"
                        ><br>

                    </div>
                    <div class=" col-md-6">
                        سطح دسترسی : <br>
                        <select name="info[role]" class="form-control">
                            <option value="admin" <?php if ($su->roles == 'admin') {
                                echo "selected";
                            } ?> >مدیر
                            </option>
                            <option value="author" <?php if ($su->roles == 'author') {
                                echo "selected";
                            } ?>>نویسنده
                            </option>
                            <option value="normal" <?php if ($su->roles == 'normal') {
                                echo "selected";
                            } ?>>کاربر عادی
                            </option>
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

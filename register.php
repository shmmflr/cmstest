<?php
include_once 'header.php';
include_once 'functions/user_func.php';
if (isset($_POST['send'])) {
    $info = $_POST['info'];
    user_register($info);
    header('location:login.php');
}
?>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 post-single">

                <div class="post-title-single"><h1>ثبت نام</h1></div>
                <br><br><br>
                <div class="post-txt-single">
                    <form method="post">
                        نام کاربری : <br>
                        <input type="text" name="info[username]" class="form-control" required><br>
                        رمز عبور : <br>
                        <input type="password" name="info[password]" class="form-control" required><br>
                        ایمیل : <br>
                        <input type="email" name="info[email]" class="form-control" required><br>

                        <hr>

                        <input type="submit" name="send" value="ثبت نام" class="btn btn-primary">
                    </form>
                    <br>
                </div>
            </div>

        </div>
    </div>

    <br>
    <br>
<?php include_once 'footer.php'; ?>
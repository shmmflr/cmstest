<?php

include_once 'header.php';
?>

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 post-single">

                <div class="post-title-single"><h1>ورود به سایت</h1></div>
                <br><br><br>
                <div class="post-txt-single">
                    <?php
                    if (isset($_POST['send'])) {
                        include_once 'functions/user_func.php';
                        $info = $_POST['info'];
                        if (isset($_POST['remember'])) {
                            setcookie('username', $info['username'], time() + 1000);
                            setcookie('password', $info['password'], time() + 1000);
                        }
                        user_login($info);
                    }

                    ?>
                    <form method="post">
                        نام کاربری : <br>
                        <input type="text" name="info[username]" class="form-control" required
                               value="<?php if (isset($_COOKIE['username'])) {
                                   echo($_COOKIE['username']);
                               } ?>"
                        ><br>
                        رمز عبور : <br>
                        <input type="text" name="info[password]" class="form-control" required
                               value="<?php if (isset($_COOKIE['password'])) {
                                   echo($_COOKIE['password']);
                               } ?>"

                        ><br>

                        <div class="custom-checkbox fr">
                            <input type="checkbox" name="remember" value="wordpress" class="custom-control-input"
                                   id="wp">
                            <label class="custom-control-label" for="wp">مرابه خاطر بسپار</label>
                        </div>
                        <br>

                        <hr>

                        <input type="submit" name="send" value="ورود" class="btn btn-primary">
                    </form>
                    <br>
                </div>
            </div>

        </div>
    </div>

    <br>
    <br>
<?php include_once 'footer.php'; ?>
<?php
if (isset($_POST['send'])) {
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $name_type = explode('.', $img_name);
    $type = end($name_type);
    $new_name = "DJK_" . time() . "." . $type;
    $tmp = $img['tmp_name'];
    $location = "upload/" . $new_name;
    move_uploaded_file($tmp, $location);

}
?>

<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<br>
<br>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" name="send">
</form>
</body>
</html>

<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $a = $_POST['name'];
    $b = $_POST['last'];
    $_SESSION['name'] = $a;
    $_SESSION['lastname'] = $b;
    if (isset($_FILES['file'])) {
        $n = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];
        if (move_uploaded_file($tmp, "picture/$n")) {
            $_SESSION['picture'] = $n;
        }
        header("location: /output.php");
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <label>نام خود را وارد کنید</label><br>
    <input type="text" name="name"><br>
    <label>نام خانوادگی خود را وارد کنید</label><br>
    <input type="text" name="last"><br>
    <input type="file" name="file">
    <input type="submit" name="submit" value="run">
</form>
</body>
</html>

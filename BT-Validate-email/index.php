<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="email" name="email">
    <button type="submit">Submit</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    function checkValidateEmail($str)
    {
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if (preg_match ($pattern, $str)){
            echo $str . ' Dung dinh dang';
        } else {
            echo $str . ' Khong dung dinh dang, moi nhap lai';
        }
    }
    checkValidateEmail($email);
}
?>
</body>
</html>
<?php
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $email = $_REQUEST['email'];
//    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        echo $email . ' Dung dinh dang';
//    } else {
//        echo $email . ' K dung dinh dang';
//    }
//}
//?>

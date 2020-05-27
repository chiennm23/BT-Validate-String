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
    <input type="text" name="phone">
    <button type="submit">Check</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];

    function checkValidatePhone ($str) {
//        $pattern = '/^\([0-9]{2}\)\-\(0[0-9]{9}\)$/';
        $pattern = '/^\(\d{2}\)(-\(0)\d{9}\)$/';
        if (preg_match($pattern, $str)){
            echo $str . ' So dinh dang dung';
        } else {
            echo $str . ' So khong dung dinh dang';
        }
    }
    echo checkValidatePhone($phone);
}

?>
</body>
</html>

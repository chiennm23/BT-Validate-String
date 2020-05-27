<!doctype html>
<html lang="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<form method="post">-->
<!--    <input type="text" name="account">-->
<!--    <button type="submit">Check</button>-->
<!--</form>-->
<?php
function checkValidateAccount($str)
{
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern, $str)) {
        echo $str . ' account chuan dinh dang yeu cau';
    } else {
        echo $str . ' account khong chuan dinh dang';
    }
}
$account = '_abc012';
$account1 = 'Acb012%';
echo checkValidateAccount($account) . '<br>';
echo checkValidateAccount($account1);
?>
</body>
</html>

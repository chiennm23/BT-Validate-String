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
    <input type="text" name="class">
    <button type="submit">Check</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $class = $_POST['class'];
    function checkValidateClass($str)
    {
        $pattern = '/^[A-Z][0-9]{4}[G|H|I|K|L|M]$/';
        if (preg_match($pattern, $str)) {
            echo $str . ' dung dinh dang cua lop hoc';
        } else {
            echo $str . ' Khong dung dinh dang cua lop hoc';
        }
    }
    echo checkValidateClass($class) . '<br>';
}
?>

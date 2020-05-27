<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo "String's first character is uppercase";
    } else {
        echo "String's first character is not uppercase";
    }
}

echo isFirstLetterUpperCase('CodeGym').'<br>';
echo isFirstLetterUpperCase('codegym');

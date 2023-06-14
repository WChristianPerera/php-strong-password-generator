<?php
function generateRandomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,@#$%&()[]';
    $password = '';
    $charsLength = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $randomChars = $chars[rand(0, $charsLength - 1)];
        $password .= $randomChars;
    }

    return $password;
}
?>

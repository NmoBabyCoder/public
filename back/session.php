<?php

session_start();

set_error_handler(function (int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);

function isLoggedIn()
{

    $idUser = $_SESSION['id'];

    if (isset($idUser)) {
        return true;
    } else {
        return false;
    }
}

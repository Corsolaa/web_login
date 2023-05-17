<?php
if(!defined("what_you_doing")) {
    die('Direct access not permitted');
}

function get_title(): string
{
    $server_page = $_SERVER['PHP_SELF'];
    return match ($server_page) {
        "/index.php" => "index",
        "/home.php" => "home",
        default => "web_login",
    };
}
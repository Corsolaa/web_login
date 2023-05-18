<?php

function get_title(): string
{
    $server_page = $_SERVER['PHP_SELF'];
    return match ($server_page) {
        "/index.php" => "index",
        "/login.php" => "Login Screen",
        "/home.php" => "home",
        default => "web_login",
    };
}
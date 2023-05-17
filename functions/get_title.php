<?php

function get_title(): string
{
    $server_page = $_SERVER['PHP_SELF'];
    return match ($server_page) {
        "/index.php" => "index",
        "/home.php" => "home",
        default => "web_login",
    };
}
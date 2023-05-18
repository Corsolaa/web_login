<?php

function get_title(): string
{
    $server_page = $_SERVER['PHP_SELF'];
    return match ($server_page) {
        "/index.php" => "Front page",
        "/login.php" => "Login screen",
        "/home.php" => "Home screen",
        default => "Toucan is life.",
    };
}
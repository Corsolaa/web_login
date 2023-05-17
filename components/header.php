<?php
if(!defined("what_you_doing")) {
    die('Direct access not permitted');
}

include("functions/get_title.php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="description of the website.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="John Spice">

    <title><?php echo get_title();?></title>
</head>
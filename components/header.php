<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/functions/get_title.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="description of the website.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="John Spice">

    <title><?php echo get_title(); ?></title>

    <!-- Styling -->
    <link rel="icon" href="../images/header_icon.ico">
    <link rel="stylesheet" href="/components/main.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
</head>
<div class="header">
    <a href="/">
        <img src="../images/toucan_icon.png" alt="toucan_logo">
        <h1>Toucan is life</h1>
    </a>
</div>

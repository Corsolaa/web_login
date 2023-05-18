<?php
include("components/header.php");
?>

<style>
    .vert-center {
        margin-right: auto;
        margin-left: auto;
    }
    .content {
        max-width: 250px;
        display: flex;
    }
    .content form {
        width: 100%;

        display: flex;
        flex-direction: column;
    }
    label {
        display: flex;
        flex-direction: column;
    }
    .submit_button {
        margin-top: 15px;
    }
    p {
        margin: 0;
    }
</style>

<div class="content vert-center">
    <form class="login" action="functions/login_auth.php" method="POST">
        <h1>Login</h1>
        <label for="username">
            <span>Username</span>
            <input type="text" name="u_name" id="u_name">
        </label>
        <label for="password">
            <span>Password</span>
            <input type="password" name="password" id="password">
        </label>
        <?php
        if (isset($_GET["error"])) {
            echo "<p style='color: red;'>Username and password don't match...</p>";
        }
        ?>
        <input type="submit" value="SUBMIT" class="submit_button">
        <?php var_dump($_POST); ?>
    </form>
</div>

<?php
include("components/header.php");
?>

<div class="content">
    <form class="login" action="functions/login_auth.php" method="POST">
        <h1>Login</h1>
        <label for="username">
            <input type="text" name="u_name" id="u_name">
            <span>Username</span>
        </label>
        <label for="password">
            <input type="password" name="password" id="password">
            <span>Password</span>
        </label>
        <input type="submit" value="SUBMIT" class="submit_button">
        <?php var_dump($_POST); ?>
    </form>
</div>

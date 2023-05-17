<?php

if(($_POST["u_name"] && $_POST["password"]) != null) {
    echo $_POST["u_name"];
    echo $_POST["password"];
} else {
    echo "whoops";
    header("Location: ../");
}
<?php


    session_start();


    $_SESSION["id"] = $_POST["id"];

    $_SESSION["name"] = $_POST["name"];

    $_SESSION["email"] = $_POST["email"];
    $_SESSION["image"] = $_POST["image"];


    echo "Updated Successful";

?>
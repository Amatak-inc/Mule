<?php

    session_start();

    if ($_SESSION["password"] == null) {

        header("location: ../login");

        die();

    }
?>
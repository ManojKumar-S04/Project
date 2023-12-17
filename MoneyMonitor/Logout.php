<?php

    session_start();

    session_unset();
    header("Location: AdminHomeFrame.php");
    die();

?>
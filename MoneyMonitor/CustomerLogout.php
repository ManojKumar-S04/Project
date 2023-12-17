<?php

    session_start();
    session_unset();
    header("Location: HomeFrame.php");
    die();

?>
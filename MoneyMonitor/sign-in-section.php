<?php

require "connection.php";
session_start();
$flag=TRUE;
if(isset($_POST["signin"]))
{

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM login where username='$username'";
    $rows = $conn->query($query);
    foreach ($rows as $row)
    {
        if($username==$row['username'] && $password==$row['password'] )
        {
            $flag=False;
            $_SESSION["username"] = $username;
            header("Location: HomeFrame.php");
        }
        else
        {
            echo "<script>alert('Invalid username or password')</script>";
        }
    }
    if($flag){
        $query="select * from admin where empid='$username'";
        $sql=$conn->query($query);
        foreach ($sql as $row)
    {
        if($username==$row['empid'] && $password==$row['password'] )
        {
            $_SESSION["username"] = $username;
            header("Location: AdminHomeFrame.php");
        }
        else
        {
            echo "<script>alert('Invalid username or password')</script>";
        }
    }
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="sign-in-section.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
       .mb-3 a:link, .mb-3 a:hover, .mb-3 a:visited
       {
        text-decoration: none;
        color:white;
       }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-bg fixed-top mb-5">
        <a class="navbar-brand" href="#">
            <img src="LogoMMWhite.png" class="website-logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-link ml-auto">
                <a class="nav-link text-light active" id="navlink1" href="navbar-section.php #homeSection">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-link" id="navlink2" href="navbar-section.php #servicesSection">FEATURES</a>
                <a class="nav-link" id="navlink3" href="navbar-section.php #aboutSection">ABOUT</a>
                <a class="nav-link" id="navlink4" href="navbar-section.php #contactSection">CONTACT</a>
                <a class="nav-link" id="navlink5" href="sign-in-page.php">

                    <img class="acc-img" src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696094991/account-logo_wicy6j.png">

                </a>

            </div>
        </div>
    </nav>
    <form action="" method="post">
    <div class="d-flex flex-column justify-content-center  bg">

        <div class="sign-in-bg p-3 text-center">
            <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696403151/LogoMMBlack_nw31sf.png" width=90px height=80px class="sign-in-page-logo mb-4 ">

            <div class="inputWithIcon mb-3">
                <input type="text" class="username-input" required name=username autocomplete="off" placeholder="Username">
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>

            <div class="inputWithIcon mb-2">

                <input type="password" style="padding-left:40px;" class="username-input" autocomplete="off" required name=password placeholder="Password">
                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>

            <div class="ml-5 text-left mb-2">
                <p ></p>
            </div>

            <div class="mb-3">
                <button class="sign-in-btn" name=signin type=submit>Sign in</button>
            </div>
            <div class="d-flex flex-row justify-content-center mr-2">
                <p class="sign-in-bottom-text">Don't have an account?</p>
                <p class="sign-up-text ml-3"><a href="Sign-up-page.php">Sign up</a></p>
            </div>

        </div>

    </form>
        <div class="footer-bg text-center p-2">
            <h1 class="footer-text mt-1">COPY RIGHT © 2023 V3 MATES</h1>
        </div>
    </div>
</body>

</html>
<?php
require "connection.php";

if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $gender=$_POST['gender'];
    $role=$_POST['role'];
    $expenseTable=$username."expense";
    $incomeTable=$username."income";

    $query="insert into login values('$username','$password','$email','$mobileno','$gender','$role','LogoMMWhite.png')";

    if($conn->query($query)===TRUE){
        echo "<script>
        alert('Successfully Registered!!!');
        </script>";
        $createTable="create table $expenseTable (id int(5) auto_increment primary key,tdate date,category varchar(30),amount int(10),note varchar(100))";
        $conn->query($createTable);
        $createTable="create table $incomeTable (id int(5) auto_increment primary key,tdate date,category varchar(30),amount int(10),note varchar(100))";
        $conn->query($createTable);
        header('Location: sign-in-section.php');
    }
    else{
        echo "<script>
        alert('OOPS Try Again!!!');
        </script>";
    }

}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Sign-up-page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
    <style>
        .sign-up-btn a:hover, a:visited, a:link
        {
            color:white;
            text-decoration:none;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-bg fixed-top mb-5">
        <a class="navbar-brand" href="#">
            <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696403155/LogoMMWhite_bjj9ko.png" class="website-logo-img">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-link ml-auto">
                <a class="nav-link text-light active" id="navlink1" href="#homeSection">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-link" id="navlink2" href="#servicesSection">FEATURES</a>
                <a class="nav-link" id="navlink3" href="#aboutSection">ABOUT</a>
                <a class="nav-link" id="navlink4" href="#contactSection">CONTACT</a>
                <a class="nav-link" id="navlink5" href="">

                    <img class="acc-img" src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696094991/account-logo_wicy6j.png">

                </a>

            </div>
        </div>
    </nav>
    <form action="" method=post>
    <div class="d-flex flex-column justify-content-center sign-up-bg-container">

        <div class="sign-up-bg p-3 text-center">
            <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696403151/LogoMMBlack_nw31sf.png" class="sign-up-page-logo mb-4">
            <div class="d-flex flex-row justify-content-center">

                <div class="inputWithIcon mr-2 mb-3">
                    <input type="text" class="sign-up-user-passw-field" required name=username placeholder="Username">
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>

                <div class="inputWithIcon ml-1 mb-2">

                    <input type="password" class="sign-up-user-passw-field" required name=password placeholder="Password">
                    <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>

            <div class="inputWithIcon mb-3">
                <input type="text" class="sign-up-mail-phone-field" required name=email placeholder="Email">
                <i class="fa fa-envelope fa-lg fa-fw mail-phone-icon" aria-hidden="true"></i>
            </div>
            <div class="inputWithIcon mb-3">
                <input type="text" class="sign-up-mail-phone-field" required name=mobileno placeholder="Mobile no.">
                <i class="fa fa-mobile fa-lg fa-fw mail-phone-icon" aria-hidden="true"></i>
            </div>
            <div class="d-flex flex-row justfy mb-3">
                <div class="text-left ">
                    <p class="sign-up-gender-employee-text">Gender</p>
                </div>
                <div class="ml-5">
                    <input type="radio" name="gender" value=Male>
                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696399391/gender-male-pic_cxsdj9.png" for="genderMale">
                </div>
                <div class="gender-input-cont">
                    <input type="radio" name="gender" value=Female>
                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696399443/gender-female-pic_stx9ij.png" for="genderMale">
                </div>
                <div class="cross-gender-input-cont ">
                    <input type="radio" name="gender" value=Others>
                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696399463/gedner_transgender-pic_j5axcu.png" for="genderMale">
                </div>

            </div>

            <div class="d-flex flex-row justfy mb-3">
                <div class="text-left ">
                    <p class="sign-up-gender-employee-text">You are a </p>
                </div>
                <div class=" youare-inupt-cont">
                    <input type="radio" id="employee" value=Employee name="role">
                    <label for="employee" class="sign-up-page-you-are-text">Employee</label>
                </div>
                <div class="youare-inupt-cont">
                    <input type="radio" id="students" value=Student name="role">
                    <label for="students" class="sign-up-page-you-are-text">Student</label>
                </div>
                <div class=" youare-inupt-cont">
                    <input type="radio" id="others" value=Others name="role">
                    <label for="others" class="sign-up-page-you-are-text">Others</label>
                </div>

            </div>

            <div class="mb-3">
                <button class="sign-up-btn" type=submit name=signup>Sign up</button>
            </div>
            <div class="d-flex flex-row justify-content-center mr-2">
                <p class="sign-up-bottom-text">Already have an account?</p>
                <a href="sign-in-section.php" class="sign-in-text ml-3" style="color:#0070F3;">Sign in</a>
            </div>

        </div>
    </form>

    </div>
    <div class="footer-bg text-center p-2">
        <h1 class="footer-text mt-1">COPY RIGHT © 2023 V3 MATES</h1>
    </div>


</body>

</html>
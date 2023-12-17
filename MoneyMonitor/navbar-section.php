<?php
session_start();
$path = "visitor-count.txt";
$fp = fopen($path, "r");
$count = fread($fp, 512);
fclose($fp);
$count = $count + 1;
$fp = fopen($path, "w");
fwrite($fp, $count);
fclose($fp);
$_SESSION['visitors']=$count;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar-section.css">
    <style>
        a:link, a:hover, a:visited{
            text-decoration:none;
            color:white;}
        div.logoname{
            margin-left:70px;
            color:white;
            position:absolute;
            font-size:25px;
            font-weight:bold;}
        div.title1{
            margin-left:725px;
            margin-top:80px;
            position:absolute;
            font-size:75px;
            font-weight: bold;
            color: #ff85b1;
            cursor: pointer;
            animation-name: x;
            animation-duration: 2.5s}
        div.title2{
            margin-left:875px;
            margin-top:160px;
            position:absolute;
            font-size:75px;
            font-weight: bold;
           color: #ff85b1;
           cursor: pointer;
           animation-name: x;
           animation-duration: 2.5s}
        @keyframes x{
            0%{text-shadow: 15px 20px 20px rgba(0,0,0,.3);
            transform: scale(1.1);}
        }
        span:nth-child(1) {
            animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);}
        span:nth-child(2) {
            animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);}
        span:nth-child(3) {
            animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);}
        span:nth-child(4) {
            animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);}
        span:nth-child(5) {
            animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);}
        span:nth-child(6) {
            animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);}
        @keyframes fade-in {
            100% {
                opacity: 1;
                filter: blur(0);}}
        span.subtittle1,.subtittle2,.subtittle3{
            display: inline-block;
            opacity: 0;
            filter: blur(4px);
            position:absolute;
            color:#FFB850;
            font-size:30px;
            font-weight: bold;
            cursor: pointer;}
        span.subtittle4,.subtittle5,.subtittle6{
            display: inline-block;
            opacity: 0;
            filter: blur(4px);
            position:absolute;
            color:#FFB850;        
            font-size:30px;
            font-weight: bold;
            cursor: pointer;}
        .subtittle2{
            margin-left: 145px;}
        .subtittle3{
            margin-left: 220px;}
        .subtittle4{
            margin-top: 50px;
            margin-left: 75px;}
        .subtittle5{
            margin-top: 50px;
            margin-left: 215px;}
        .subtittle6{
            margin-top: 50px;
            margin-left: 295px;
        }
        div.quotes{
            margin-top: 300px;
            margin-left: 875px;
            position: absolute;}
        .home-sec-login-btn:hover{
            scale:1.1;}
        .name{
            margin-top: 285px;
            padding-left: 10px;
            text-align: center;
            font-size: 20px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color:darkblue;}
        .contact{
            margin-top: 70px;
            margin-left:10px;
            margin-right: 10px;
            text-align: center;
            font-size: 18px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;}
        .img{
            margin-left: -25px;
            margin-top: 4.5px;
            position: absolute;}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-bg fixed-top mb-5">
        <a class="navbar-brand" href="#">
            <img src="LogoMMWhite.png" class="website-logo-img">
        </a>
        <div class="logoname">
            MONEY MONITOR
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-link ml-auto">
                <a class="nav-link text-light active" id="navlink1" href="#homeSection">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-link" id="navlink2" href="#servicesSection">FEATURES</a>
                <a class="nav-link" id="navlink3" href="#aboutSection">ABOUT</a>
                <a class="nav-link" id="navlink4" href="#contactSection">CONTACT</a>
                
                <a href="sign-in-section.php"> <img class="acc-img mt-2" src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696094991/account-logo_wicy6j.png"></a>
                </a>
            </div>
        </div>
    </nav>
    <div id="homeSection">
        <div class="title1">
            BUDGET 
        </div>
        <div class="title2">
            TRACKER
        </div>
        <div class="quotes">
            <span class="subtittle1">Maximize</span>
            <span class="subtittle2">Your</span>
            <span class="subtittle3">Money</span>
            <span class="subtittle4">Minimize</span>
            <span class="subtittle5">Your</span>
            <span class="subtittle6">Stress</span>
        </div>
        <div class="mt-5 d-flex justify-content-center flex-column  home-bg-cont">
            <div>
                <button class="home-sec-login-btn"><a href="sign-in-section.php">LOG IN</a></button>
            </div>
        </div>
        <div class="home-sec-bottom">
        </div>
    </div>
    <div id="servicesSection">
        <div class="service-sec-bg pt-5 pb-5">
            <div class="d-flex flex-row justify-content-center">
                <div>
                    <div class="d-flex flex-row ">
                        <div class="service-sec-card mr-4 ">
                            <div>
                                <div class="text-center ">
                                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696407841/Analytics-pic_ai1yto.jpg" class="features-img mt-2 mb-2" />
                                </div>
                                <div class="m-4">
                                    <p class="features-text mt-2"> Users can access various reports and graphs that provide insights into their spending habits and financial trends.</p>
                                </div>
                                </div>
                        </div>
                        <div class=" service-sec-card ml-5 ">
                            <div>
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696408189/security-pic_e7mg9d.jpg" class="features-img mt-3 " />
                                   </div>
                                    <div class="m-5">
                                        <p class="features-text mt-2">Secure encryption and privacy measures to protect sensitive financial information. </p>
                                    </div>
                               </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-4">

                        <div class="service-sec-card mr-4 ">
                            <div>
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696410904/Categoriespc_rvdu6r.jpg" class="features-img mt-3" />
                                </div>
                                <div class="m-5">
                                    <p class="features-text mt-2"> It may offer predefined expense categories and allow users to create custom categories to suit their needs.</p>
                                </div>
                                </div>
                        </div>
                        <div class=" service-sec-card ml-5 ">
                            <div>
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696410765/Support-pic_cze5co.jpg" class="features-img mt-3" />
                                </div>
                                <div class="m-5">
                                    <p class="features-text mt-2"> Access to customer support and help resources for any issues or questions.</p>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://res.cloudinary.com/dwcp6zcbi/image/upload/v1696139300/service-section-img_vjbxvr.png" class="service-section-img">

                </div>
            </div>
        </div>
    </div>
    <div id="aboutSection">
        <div class="d-flex flex-column justify-content-center about-sec-bg pt-5 pb-5">
            <div class="d-flex flex-row justify-content-center">
                <div class="about-sec-card mr-5" style="background-image: url(LOGO-BESWAR.jpg); background-size:250px; background-repeat: no-repeat; background-position: center;">
                   <p class="name"><b>B ESWAR</b><br> 21BCS0114</p> 
                </div>
                <div class="about-sec-card mr-4 "style="background-image: url(LOGO-MANOJ.jpg); background-size:250px; background-repeat: no-repeat; background-position: center;">
                    <p class="name"><b>MANOJ</b><br> 21BCS0001</p>
                </div>
                <div class="about-sec-card ml-4 "style="background-image: url(LOGO-VICKY.jpg); background-size:250px; background-repeat: no-repeat; background-position: center;">
                    <p class="name"><b>VIGNESH</b><br> 21BCS0093</p>
                </div>
                <div class="about-sec-card ml-5 " style="background-image: url(LOGO-AYUSH.jpg); background-size:250px; background-repeat: no-repeat; background-position: center;">
                    <p class="name"><b>AYUSH</b><br> 21BCS0115</p>
                </div>
        </div>
        </div>
        <div class="about-sec-bottom">
        </div>
    </div>
    <div id="contactSection">
        <div class="d-flex flex-column justify-content-center contact-sec-bg-cont pt-5 pb-5">
            <div class="d-flex flex-row justify-content-center ml-4">
                <div class="contact-sec-card  mr-5">
                    <p class="contact"><img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png" height="18px" width="20px" class="img">&nbsp;<b>E-Mail Id:</b><br> moneytracker@gmail.com</p>   
                </div>
                <div class="contact-sec-card ml-4 mr-4">
                    <p class="contact"><img src="https://p.kindpng.com/picc/s/156-1568273_vector-contact-incoming-call-icon-gif-png-transparent.png" height="18px" width="20px" class="img"><b>Phone Number:</b><br> +91-55555 44444</p> 
                </div>
                <div class="contact-sec-card  ml-5">
                    <p class="contact"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLbuV3u2jZdal-lGSn1rB_PKGGKk3xf24FCPvPro_xyQur05H21gHtXWYNBNdZzCdsEYk&usqp=CAU" height="18px" width="20px" class="img">&nbsp;<b>Address:</b><br> Hi-Tech city, Hyderabad, Telangana</p> 
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bg text-center p-2">
        <h1 class="footer-text mt-1">COPY RIGHT © 2023 MONEY MONITOR</h1>
    </div>
</body>
</html>
<?php
require "connection.php";
if(isset($_POST['submit'])){
    $o_name=$_POST['owner-name'];
    $mobile=(int)$_POST['mobile'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $p_name=$_POST['pet-name'];
    $p_password=$_POST['pet-password'];
    $p_kind=$_POST['pet-kind'];
    $p_bread=$_POST['pet-bread'];
    $p_gender=$_POST['pet-gender'];
    $p_about=$_POST['about-pet'];
    $p_age=$_POST['pet-age'];
    if($_FILES['file']['error']>0){
        echo "<script>alert('Image Does not Exist')</script>";
    }
    $filename=$_FILES['file']['name'];
    $filesize=$_FILES['file']['size'];
    $tmpname=$_FILES['file']['tmp_name'];

    $validimageextension=['jpg','jpeg','png'];
    $imageextension=explode('.',$filename);
    $imageextension=strtolower(end($imageextension));
    if(!in_array($imageextension,$validimageextension)){
        echo "<script>alert('Invalid Image Extension(Add .jpg, .jpeg, .png)');</script>";
    }
    else if($filesize>1000000){
        echo "<script>alert('Image size is Too Large!!!');</script>";
    }
    else{
        $newimagename=uniqid();
        $newimagename.=".". $imageextension;

        move_uploaded_file($tmpname,'img/'.$newimagename);
        $query="insert into pet_details values('$o_name','$mobile','$email','$location','$p_name','$p_password','$p_kind','$p_bread','$p_gender','$p_about','$newimagename','$p_age')";

        if($con->query($query)===TRUE){
            echo "<script>alert('Successfully Registered!!!');</script>";
            
        }
    }
}

?>
<html>
    <head>
        <style>
            body{
                background-image: url(login-image.png);
                background-repeat: no-repeat;
                background-position: -50px 650px;
                background-size: 550px 400px;
            }
            div.register{
                width: 700px;
                height: 1150px;
                margin-left:28% ;
                margin-top: 50px;
                margin-bottom: 100px;
                position: absolute;
                text-decoration: none;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 20px;
                background-color: white;
                padding: auto;
                border-radius: 20px;
                box-shadow: 1px 1px 5px 1px rgb(66, 64, 64) ;
            }
            div.register-image{
                width:300px;
                height:300px;   
                position: absolute;
                margin-top: -10px;
                margin-left: 72%;
                background-image: url(login-image1.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            p.simple{
                position: absolute;
                margin-top: 1250px;
            }
            h1{
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 50px;
                margin-left: 25%;
                text-decoration:none;
                font-weight: bolder;
                color: blueviolet;
            }
            .logo-white{
                position: absolute;
                margin-left: 15%;
                margin-top: 0px;

            }
            input:focus,textarea:focus{
                border-color: blueviolet;
                box-shadow: 0 0 8px 0 blueviolet;
            }

            .btn{
                width: 320px;
                height: 40px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                font-size: 20px;
                border-radius: 20px;
                border-color: black;
                color: aliceblue;
                background-color: blueviolet;
                text-align: center;
            }

            .btn:hover{
                transition: 2 2 1;
                transform: 1 1 1;
                scale: 1.1;
                cursor: pointer;
            }

            .box{
                width: 500px;
                height:50px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 20px;
                font-weight: bolder;
                border-radius: 5px;
                border: none;
                border-bottom: 1;
                color: blueviolet;
                text-align: left;
                
            }
            .file-box{
                width: 300px;
                height:30px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 20px;
                font-weight: bolder;
                border-radius: 5px;
                border: none;
                border-bottom: 1;
                
            }

            p.cen{
                text-align: center;
                font-size: 20px;
                font-weight: bolder;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            }

            .box:hover{
                border: none;
                text-decoration: none;
                scale: 1.1;
                
            }

            a.link{
                text-decoration: none;
                color: blueviolet;
            }
            a.link:hover{
                
                scale: 10;
            }

            header{
                height: 70px;
                width: 100%;
                border-radius: 10px;
                margin-top:0px;
                position: relative;
                background-color: blueviolet;
            }
            div.logoname{
                position: absolute;
                color: white;
                margin: 7px 0 0 60px;
                padding: auto;
                font-size: 40px;
                font-weight:bolder ;
            }
            img.logo{
                margin: 9px 5px 0 10px;
                padding: auto;
                position: absolute;
            }
            table{
                position:absolute;
                margin: 0 0 0 70%;
                font-size: 25px;
                color: white;
                font-weight: bold;
            }
            a.head:link
            {
                text-align:right;
                color:white;
                text-decoration:none;
            }
            a.head:visited
            {
                color:white;
                text-decoration:none;
            }
            a.head:hover
            {   
                text-decoration:none;
                color:rgba(255, 255, 255, 0.555)
            }
            textarea{
                width:65%;
                height: 150px;
                resize: none;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bold;
                font-size: 20px;
                border-radius: 10px;
                margin-top: 30px;
                text-align: left; 
                padding: 10px;
            }
            textarea::-webkit-scrollbar{
                width: 0px;
            }
            input[type=radio]{
                width: 17px;
                height: 17px;
            }
        </style>
    </head>
    <body style="background-color: whitesmoke;">
        <header>
            <a class="head" href="homepage.php">
                <img class=logo src="logo.png" width="47px" height="47px">
                <div class="logoname">Pet Adoption</div>
            </a>

            <table cellpadding="15">
                <tr>
                    <td><a class="head" href="homepage.php">Home</a></td>
                    <td><a class="head" href="">About</a></td>
                    <td><a class="head" href="">Feedback</a></td>
                    <td><a class="head" href="">Pets</a></td>
                </tr>
            </table>
        </header>
        <div class="register-image"></div>
        <div class="register-image1"></div>
        <div class="register">
            <form action="" method="post" enctype="multipart/form-data">    
                <img class="logo-white" src="logo-white.png" width="70px" height="70px">
                <h1>Register Your Pet</h1>  
                <p class="cen">
                    <input type="text" name="owner-name" class="box" required placeholder="Your Name"><br><br>                    
                    <input type="text" name="mobile" class="box" required placeholder="Mobile no."><br><br>
                    <input type="email" name="email" class="box" required placeholder="Email"><br><br>                    
                    <input type="text" name="location" class="box" required placeholder="Location"><br><br>
                    <input type="text" name="pet-name" class="box" required placeholder="Your Pet Name"><br><br>
                    <input type="password" name="pet-password" class="box" required placeholder="Set password for your Pet"><br><br>                    
                    <input type="text" name="pet-kind" class="box" required placeholder="Kind of Pet (eg: dog, cat, bird, etc.)"><br><br>
                    <input type="text" name="pet-bread" class="box" required placeholder="Bread of Pet"><br><br>
                    <input type="text" name="pet-age" class="box" required placeholder="Pet Age(in years)"><br><br>
                    Pet Gender:   
                    <input type="radio" value=Male name="pet-gender"> Male &nbsp;                    
                    <input type="radio" value=Female name="pet-gender">Female<br><br>
                    Upload Your Pet photo: &nbsp;
                    <input type="file" name="file" accept=".jpg, .jpeg, .png" class="file-box"><br>
                    <textarea name="about-pet" placeholder="Write about Your Pet..."></textarea>
                </p>
                <p class="cen"><input type="submit" class="btn cen" name="submit" value="Register"></p>
            </form>
        </div>
        <p class="simple">. </p>
    </body>
</html>
<?php
require "connection.php";

if(isset($_POST['submit'])){
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $query = "Select * from pet_details where mobile='$mobile';";
    $rows = $con->query($query);
    foreach ($rows as $row){
       
            if(($mobile==$row['mobile'])&&($password==$row['pet_password'])){
                $query = "delete from pet_details where mobile='$mobile';";
                if($con->query($query)===TRUE){
                    echo "<script>alert('Removed Successfully!!!'); </script>";
                }
                else{
                    echo "<script>alert('Unable to Remove!!!'); </script>";
                }
            }
            else {
                echo "<script>alert('Incorrect Mobile no/password!'); </script>";
            }
    }
    
}

?>

<html>
    <style>
         header{
                height: 70px;
                width: 100%;
                border-radius: 10px;
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
            div.delete-section{
                width: 400px;
                height: 450px;
                margin-left:37% ;
                margin-top: 100px;
                position: absolute;
                text-decoration: none;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 20px;
                background-color: white;
                padding: auto;
                border-radius: 20px;
                box-shadow: 1px 1px 5px 1px rgb(66, 64, 64) ;
            }

            h1{
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 50px;
                margin-left: 40%;
                text-decoration:none;
                font-weight: bolder;
                color: blueviolet;
            }
            .logo-white{
                margin-left: 38%;
                margin-top: 15px;

            }
            input:focus{
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
                width: 300px;
                height:50px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 20px;
                font-weight: bolder;
                border-radius: 5px;
                border: none;
                border-bottom: 1;
                color: blueviolet;
                text-align: left;
                padding-left: 10px;
            }

            p.cen{
                margin-top: 20px;
                text-align: center;
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

    </style>
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
        <div class="delete-section">
            <form method="post"> 
                <img class="logo-white" src="logo-white.png" width="100px" height="100px">    
                <p class="cen">
                    <input type="text" name="pet-name" class="box" required placeholder="Pet Name"><br><br>                    
                    <input type="password" name="password" class="box" required placeholder="Password"><br><br>
                    <input type="text" name="mobile" class="box" required placeholder="Mobile no."><br><br>                  
                    <input type="submit" class="btn" name="submit" value="Remove"><br>
                </p> 
            </form>
        </div>
    </body>
</html>
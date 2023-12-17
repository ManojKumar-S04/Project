<?php
require "connection.php";

if(isset($_POST['view-btn'])){
    $mobile=$_POST['view-btn'];
    $rows = $con->query("Select * from pet_details where mobile='$mobile'");
}
?>

<html>
    <head>
        
        <style>
             body{
                background-image: url(signup-image.png);
                background-repeat: no-repeat;
                background-position: 105% 900px;
                background-size: 500px 300px;
                background-color: white;
            }
            div.view-bg-image{
                width:230px;
                height:230px;
                position: absolute;
                margin-top: 20px;
                margin-left: 18%;
                background-image: url(signup-image1.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100% 100%;
            }
            img.pet-image{
                width: 500px;
                height: 400px;
                margin: 20px 0 0 33%;
                border-radius: 20px;
            }
            h1.pet-name{
                width: 100%;
                margin-left: 0%;
                font-size: 50px;
                text-align: center;
                
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                color: blueviolet;
                
            }
            
            
            table.pet-details{
                width: 650px;
                margin: 0 0 0 30%;
                position: relative;
                font-size: 30px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: 500;
                color: blueviolet;
                
            }
            button.back-to-home{
                width: 100px;
                height: 40px;
                border-radius:10px;
                background-color: blueviolet;
                color: white;
                font-size: 25px;
                font-weight: bold;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            }
            button.back-to-home:hover{
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
                transition: .2s;
                scale: 1.04;
                cursor: pointer;
            }
                        
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
        <div class="view-bg-image"></div>
        <?php foreach($rows as $row){ ?>
        <img class="pet-image" src="img/<?php echo $row['pet_image']; ?>">
        <h1 class="pet-name"><?php echo $row['pet_name']; ?> </h1>

        <table class="pet-details" cellpadding="15">
            <tr>
                <td>Owner Name:</td>
                <td><?php echo $row['owner_name']; ?></td>
            </tr>
            <tr>
                <td>Location:</td>
                <td><?php echo $row['location']; ?></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><?php echo $row['mobile']; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <td>Kind of Pet:</td>
                <td><?php echo $row['pet_kind']; ?></td>
            </tr>
            <tr>
                <td>Bread of Pet:</td>
                <td><?php echo $row['pet_bread']; ?></td>
            </tr>
            <tr>
                <td>Pet Gender:</td>
                <td><?php echo $row['pet_gender']; ?></td>
            </tr>
            <tr>
                <td>Pet Age(in years):</td>
                <td><?php echo $row['pet_age']; ?></td>
            </tr>
            <tr>
                <td colspan="2">About Pet:</td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $row['about_pet']; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="2" style="text-align: center;"><a href="homepage.php"><button class="back-to-home">Back</button></a></td>
            </tr>
        </table>
    </body>
</html>
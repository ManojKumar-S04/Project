<?php
require "connection.php";

if(isset($_POST['submit'])){
  

    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
  
  
    $sql="Insert into feedback(email,feed) values('$email','$feedback')";
  
    if($con->query($sql)===TRUE){  

      echo "<script>alert('Feedback Given Sucessfully!!!')</script>";
    }
    else{
  
      echo '<script>alert("Cannot able to give Feedback!!!")</script>';
    }
  }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <style>
            header{
                height: 70px;
                width:100%;
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
                margin: 0 0 0 62%;
                font-size: 25px;
                color: white;
                font-weight: bold;
            }
            a:link
            {
                text-align:right;
                color:white;
                text-decoration:none;
            }
            a:visited
            {
                color:white;
                text-decoration:none;
            }
            a:hover
            {   
                text-decoration:none;
                color:rgba(255, 255, 255, 0.555)
            }

            .carousel-item{
                width: 100%;
                height: 700px;
            }

            div.wall1{
                background-image: url(dog.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: center;
            }
            div.wall2{
                background-image: url(wallpaper1.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: center;
            }
            div.wall3{
                background-image: url(wallpaper9.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: center;
            }
            h1.home-quotes{
                margin-top:100px;
                margin-left: 60%;
                position: absolute;
                font-size: 50px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif; 
                font-weight: bolder;
                color: rgb(255, 255, 255);
                width:500px;
            }
            div.about-section{
                margin-top: 10px;
                border-radius: 10px;
                width: 100%;
                height:700px;
                background-image: url(about-image1.jpg);
                background-repeat: no-repeat;
                background-size: 55% 100%;
                background-position:right;
            }
            img.about-section-image{
                width:150px;
                height:150px;
                margin-left:260px;
                margin-top: 130px;
                position: absolute;
            }
            h1.about-section{
                position: absolute;
                color: blueviolet;
                margin: 30px 0 0 70px;
                font-size: 50px;
                width: 60%;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
            }
            p.about-section-content-tittle{
                position: absolute;
                color: blueviolet;
                margin: 110px 0 0 450px;
                font-size: 35px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
            }
            p.about-section-content{
                position: absolute;
                color: blueviolet;
                margin: 170px 0 0 450px;
                font-size: 25px;
                width: 50%;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
            }
            div.feedback-section{
                margin-top: 10px;
                border-radius: 10px;
                width: 100%;
                height:700px;
                background-color: #f5f5f5;
            }
            h1.feedback-tittle{
                margin-top: 100px;
                margin-left: 60px;
                position: absolute;
                color: blueviolet;
                font-size: 70px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                font-style: oblique;
            }
            p.feedback-content{
                margin-top: 210px;
                margin-left: 168px;
                position: absolute;
                color: blueviolet;
                font-size: 35px;
                font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: light;
                font-style: oblique;
            }
            div.feedback-image{
                width:550px;
                height: 400px;
                background-color: white;
                position: absolute;
                margin-top: 298px;
                margin-left: 130px;
                background-image: url(feedback.png);
                background-repeat: no-repeat;
                background-size:130% 100%;
                background-position: center;
            }
            div.feedback-box{
                background-color: white;
                width: 500px;
                height: 500px;
                border-radius: 20px;
                position: absolute;
                margin-top: 80px;
                margin-left: 55%;  
            }
            div.feedback-box:hover{
                
                box-shadow: 15px 20px 20px rgba(0,0,0,.3),inset -4px -4px 10px white;
                transition: .2s;
            }
            h1.feedback-name{
                margin: 25px;
                font-size: 50px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                text-align: center;
                font-weight: bolder;
                color:blueviolet;
            }
            form{
                text-align: center;
            }
            .box{
                width: 65%;
                height:50px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-size: 20px;
                font-weight: bold;
                border-radius: 10px;
                margin-top:30px;
                color: blueviolet;
                padding-left: 10px;
                text-align: left;  
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

            input[type="email"]:focus,textarea:focus {
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
                margin-top: 30px;
            }

            .btn:hover,.box:hover,textarea:hover,div.can-do-content:hover{
                transition: 2 2 1;
                transform: 1 1 1;
                scale: 1.1;
                cursor: pointer;
            }
            div.can-do{
                margin-top: 10px;
                border-radius: 10px;
                width: 100%;
                height:700px;
            }
            h1.can-do-tittle{
                margin-top: 20px;
                margin-left: 45%;
                position: absolute;
                color: blueviolet;
                font-size: 70px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                font-style: oblique;
            }
            div.can-do-content{
                margin-left: 55%;
                width:250px;
                height: 250px;
                background-color: whitesmoke;
                border-radius: 10px;
                position: absolute;
                color: blueviolet;
                font-size: 30px;
                font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: light;
                font-style: oblique;
                box-shadow: 15px 20px 20px rgba(0,0,0,.3)
            }
            img.can-do-content-image{
                width:70px;
                height: 70px;
                margin: 30px 0 0 33%;
            }
            p.can-do-content{
                position: absolute;
                color: blueviolet;
                width:210px;
                
                margin-top: 10px;
                margin-left: 30%;
                font-size: 26px;
                font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                
            }
            div.can-do-image{
                width: 700px;
                height:500px;
                position: absolute;
                margin-top: 100px;
                margin-left: 40px;
                background-image: url(2.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: left center;
                border-bottom-left-radius: 100px;
                border-bottom-right-radius: 10px;
                border-top-right-radius: 300px;
                border-top-left-radius: 10px;
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
            }
            div.pets{
                width: 100%;
                height: 760px;
                border-radius: 10px;
                margin-top: 10px;
                background-color: whitesmoke;
            }
            h1.pets-section-tittle{
                position: absolute;
                margin-top: 30px;
                margin-left: 80px;
                font-size: 60px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                color: blueviolet;
            }
            div.pets-scrollbox{
                width: 90%;
                height: 88%;
                position: absolute;
                margin-top: 110px;
                margin-left: 80px;
                display: flex;
                overflow-x: auto;
                background-color: whitesmoke;
            }
            div.pets-scrollbox::-webkit-scrollbar{
                width: 0;
            }
            div.pet-card{
                height: 90%;
                min-width: 350px;
                line-height: 90%;
                margin: 20px 20px 0 20px;
                background-color: white;
                margin-right: 30px;
                border-radius: 20px;
               
            }
            img.pet-card-image{
                width: 310px;
                height: 50%;
                margin-left: 20px;
                margin-top: 15px;
               

                border-bottom-left-radius: 60px;
                border-bottom-right-radius: 10px;
                border-top-right-radius: 60px;
                border-top-left-radius: 10px;
            }
            img.pet-card-image:hover{
                transition: 2 2 1;
                transform: 1 1 1;
                scale: 1.05;
            }
            h1.pet-name{
                margin: 15px 0 25px 20px;
                font-size: 40px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                color: blueviolet;
            }

            p.pet-details{
                margin:20px 0 10px 20px;
                font-size: 25px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: light;
                color: blueviolet;
            }
            button.pet-view{
                width: 100px;
                height: 40px;
                margin: 10px 0 0 0px;
                border-radius:10px;
                background-color: blueviolet;
                color: white;
                font-size: 25px;
                font-weight: bold;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            }
            div.pet-card:hover,button.pet-view:hover,button.registration:hover{
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
                transition: .2s;
                scale: 1.04;
                cursor: pointer;
            }
            div.contact-section{
                margin-top: 10px;
                background-image: url(contact-us5.jpg);
                background-repeat: no-repeat;
                background-size: 60% 70%;
                background-position: 310px 10px;
                width: 100%;
                height:700px;
            }
            div.contact-section-card{
                width: 200px;
                height:200px;
                position: absolute;
                outline: 2px solid;
                margin-top:450px;
                border-radius: 10px;
                background-color: white;
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
            }
            div.contact-section-card:hover{
                transition: 2 2 1;
                transform: 1 1 1;
                scale: 1.04;
                
                cursor: pointer;
            }
            img.contact-card-logo{
                width:55px;
                height: 55px;
                margin-top: 10px;
                margin-left: 35%;
                position: absolute;
            }
            p.contact-card-content{
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: 800;
                
                width: 80%;
                position: absolute;
                margin-top: 90px;
                margin-left: 20px;
               
            }
            a.contact{
                color: blueviolet;
                padding-bottom:5px;
                width: 80%;
            }

            

            div.register-section{
                width: 100%;
                height: 700px;
            }
            h1.register-section-tittle{
                position: absolute;
                margin-top: 50px;
                margin-left: 70px;
                font-size: 60px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                color: orange;
            }

            h1.register-section-name{
                margin-top: 165px;
                font-size: 40px;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                font-weight: bolder;
                color: blueviolet;
                position: absolute;
            }
            button.registration{
                width: 300px;
                height: 80px;
                position: absolute;
                background-color: blueviolet;
                font-size: 30px;
                font-weight: bolder;
                font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
                color: white;
                margin-top: 265px;
                
            }
            div.register-image{
                width: 400px;
                height:300px;
                position: absolute;
                margin-top: 375px;
                margin-left: 13%;
                background-image: url(adopt-pet2.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: left center;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 10px;
                border-top-right-radius: 75px;
                border-top-left-radius: 10px;
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
            }
            div.remove-image{
                width: 400px;
                height:300px;
                position: absolute;
                margin-top: 125px;
                margin-left: 58%;
                background-image: url(remove.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: left center;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 10px;
                border-top-right-radius: 75px;
                border-top-left-radius: 10px;
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
            }
            div.social-media{
                width: 60px;
                height: 200px;
                margin: 20% 0 0 96.1%;
                background-color: whitesmoke;
                position: absolute;
                outline: 2px solid;
            }
            img.social-media{
                width: 40px;
                height: 40px;
                margin: 20px 0 0 10px;
                border-radius: 10px; 
            }
            img.social-media:hover{
                
                transition: 2 2 1;
                transform: 1 1 1;
                scale: 1.1;
                cursor: pointer;
                box-shadow: 15px 20px 20px rgba(0,0,0,.3);
            }

        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <header>
            <a href="homepage.php">
                <img class=logo src="logo.png" width="47px" height="47px">
                <div class="logoname">Pet Adoption</div>
            </a>

            <table cellpadding="15">
                <tr>
                    <td><a href="homepage.php">Home</a></td>
                    <td><a href="#section-about">About</a></td>
                    <td><a href="#section-feedback">Feedback</a></td>
                    <td><a href="#section-contact">Contact</a></td>
                    <td><a href="#section-pets">Pets</a></td>
                </tr>
            </table>
        </header>



        <div id="carouselExampleControls" class="carousel slide" style="margin-top: 5px; border-radius: 10px;" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active wall1">
                <h1 class="home-quotes">Open your heart and your home to a shelter pet and change their world forever.</h1>
              </div>
              <div class="carousel-item wall2">
              <h1 class="home-quotes" style="margin-left:55%;width:600px; color:blueviolet;">Shelter pets aren't just looking for homes; they're looking for love.</h1>
              </div>
              <div class="carousel-item wall3">
              <h1 class="home-quotes" style="margin-left:10%;width:600px;">Rescuing an animal may not change the world, but for that animal, their world changes forever.</h1>
              </div>
            </div>
           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>



          <div class="about-section"id="section-about">
            <h1 class="about-section">Your Pet Adoption Journey With Us</h1>
            <img class="about-section-image" src="pet-care.png">
            <p class="about-section-content-tittle">AdoptLove</p>
            <p class="about-section-content">The rescue or pet parents will walk you through their adoption process. Prepare your home for the arrival of your fur baby to help them adjust to their new family.</p>
            
            <img class="about-section-image" style="margin-left: 60px; margin-top: 330px;" src="find-pet.png">
            <p class="about-section-content-tittle" style="margin-left: 250px; margin-top: 330px;">Find Your Love</p>
            <p class="about-section-content" style="margin-left: 250px; margin-top: 400px;">Adopt a dog or cat who's right for you. Simply scroll and find your love.</p>

            <img class="about-section-image" style="margin-top: 510px;" src="24-hours.png">
            <p class="about-section-content-tittle" style="margin-top: 530px;">Anytime Contact</p>
            <p class="about-section-content" style="margin-top: 600px; width: 35%;">Once you find a pet, Contact them to learn more about how to meet and adopt the pet.</p>
            
        </div>



        <div class="can-do">
            <h1 class="can-do-tittle">What you can Do?</h1>
            <div class="can-do-content" style="margin-top: 140px;">
                <img class="can-do-content-image" src="adopt.png">
                <p class="can-do-content">ADOPT</p>
                <p class="can-do-content" style="margin-left: 20px;margin-top:60px; font-size: 20px;text-align: center;">Add a new member to your family.</p>
            </div>
            <div class="can-do-content" style="margin-top: 140px;margin-left: 76%;">
                <img class="can-do-content-image" src="volunteer.png">
                <p class="can-do-content" style="margin-left: 48px;">VOLUNTEER</p>
                <p class="can-do-content" style="margin-left: 20px;margin-top:60px; font-size: 20px;text-align: center;">Help out the animals which are in need.</p>
            </div>
            <div class="can-do-content" style="margin-top: 430px;">
                <img class="can-do-content-image" src="foster.png">
                <p class="can-do-content" style="margin-left: 66px;">FOSTER</p>
                <p class="can-do-content" style="margin-left: 20px;margin-top:60px; font-size: 20px;text-align: center;">Shelter until you can with our help.</p>
            </div>
            <div class="can-do-content" style="margin-top: 430px;margin-left: 76%;">
                <img class="can-do-content-image" src="dog-food.png">
                <p class="can-do-content" style="margin-left: 20px;">FEED THE NEEDY</p>
                <p class="can-do-content" style="margin-left: 20px;margin-top:60px; font-size: 20px;text-align: center;">Feed the animals which are in the streets.</p>
            </div>
            <div class="can-do-image"></div>
        </div>



        <div class="pets" id="section-pets">
            <h1 class="pets-section-tittle">List Of Pets For Adoption:</h1>
            <div class="pets-scrollbox">
                <?php 
                $rows = $con->query("Select * from pet_details");
                foreach($rows as $row){ 
                ?>
                <div class="pet-card">
                    <img src="img/<?php echo $row['pet_image'];?>" class="pet-card-image" alt="image">
                    <h1 class="pet-name"><?php echo $row['pet_name']; ?></h1>
                    <p class="pet-details">Type: <?php echo $row['pet_kind'] ?></p>
                    <p class="pet-details">Gender: <?php echo $row['pet_gender'] ?></p>
                    <p class="pet-details">Location: <?php echo $row['location'] ?></p>
                    <form action="pet-view.php" method=post>
                      <button type=submit value="<?php echo $row['mobile']; ?>" name=view-btn class="pet-view">View</button>
                    </form>
                </div>
                <?php } ?>
            </div>
        </div>


        <div class="register-section">
        <h1 class="register-section-tittle">BE A PART IN OUR SITE:</h1>
            <h1 class="register-section-name" style="margin-left: 155px;">For Regestering Your Pet</h1>
            <a href="pet-register.php"><button class="registration" style="margin-left: 230px;">REGISTRATION</button></a>
            <div class="register-image"></div>
            <h1 class="register-section-name" style="margin-left:56%;margin-top: 475px;">For Removing Your Pet</h1>
            <a href="delete-pet.php"><button class="registration" style="margin-left: 60%;margin-top: 575px;">REMOVE</button></a>
            <div class="remove-image"></div>
        </div>



        <div class="feedback-section" id="section-feedback">
            <h1 class="feedback-tittle">Give Us Your Opinion</h1>
            <p class="feedback-content">Help us improve! Leave feedback</p>
            <div class="feedback-image"></div>
            <div class="feedback-box">
                <h1 class="feedback-name">Feedback</h1>
                <form action="" method="post">
                    <input type="email" class="box" name=email placeholder="E-mail" required><br>
                    <textarea name=feedback placeholder="Enter your Feedback..." required></textarea><br>
                    <input type="submit" name=submit class="btn">
                </form>
            </div>
        </div>



        <div class="contact-section" id="section-contact">
            <div class="contact-section-card" style="margin-left: 350px;">
                <img src="telephone.png" class="contact-card-logo"> 
                <p class="contact-card-content"><a class="contact" href="">+91 6340139810</a></p>
                <p class="contact-card-content"style="margin-top:125px"><a class="contact" href="">+91 9876543210</a></p>
            </div>
            <div class="contact-section-card" style="margin-left: 650px;">
                <img src="mail.png" class="contact-card-logo">
                <p class="contact-card-content"><a class="contact" href="">petadoption@ gmail.com</a></p>
            </div>
            <div class="contact-section-card" style="margin-left: 950px;">
                <img src="location.png" class="contact-card-logo">
                <p class="contact-card-content"style="color:blueviolet;margin-left:35px">VIT, Katpadi, Vellore, Tamil Nadu 632014</p>
            </div>
            <div class="social-media">
                <a href=""><img class="social-media" src="instagram.png"></a>
                <a href=""><img class="social-media" style="margin-top: 20px;" src="facebook.png"></a>
                <a href=""><img class="social-media" style="margin-top: 20px;" src="twitter.png"></a>
            </div>
        </div>
    </body>
</html>
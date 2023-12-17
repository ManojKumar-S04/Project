<?php
session_start();
$username=$_SESSION['username'];


?>

<html>
    <head>
        <style>
            *
            {
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            div.outer
            {
                width:900px;
                height:550px;
                margin-left:80px;
                margin-top:50px;
                position:absolute;
                background-color: #f2f2f2;
                border-radius:100px;
            }  
            .popup
            {
                background-color:rgba(256,256,256,0.1);
                width:100%;
                height: 100%;
                position:absolute;
                top:0;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .popup-content
            {
                height: 220px;
                width: 450px;
                background-color: white;
                padding: 20px;
                border-radius: 20px;
                position: relative;
            }
            .close
            {
                position: absolute;
                top:-15px;
                right: -15px;
                background-color: white;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                cursor: pointer;
            }
            .logout
            {
                position:absolute;
                margin-left:170px;
                width:100px;
                height: 100px;
            }
            .logout-text
            {
                position: absolute;
                margin-left:180px;
                margin-top:100px;
                font-size:30px;
                color:#0070F3;
                font-weight: bold;
            }
            .logout-user
            {
                position:absolute;
                margin-left:120px;
                margin-top:140px;
                font-size:15px;
                color:#0070F3;
                text-align: center;
            }
            button.no
            {
                position: absolute;
                margin-left:110px;
                margin-top:190px;
                font-size:20px;
                color:#0070F3;
                font-weight: bold;
                background-color: white;
                border-radius:3px;
                border-color:#0070F3;
                width:100px;
                height: 35px;
                cursor: pointer;
            }
            button.yes
            {
                position: absolute;
                margin-left:240px;
                margin-top:190px;
                font-size:20px;
                color:white;
                font-weight: bold;
                background-color: #0070F3;
                border-radius:3px;
                border-color:#0070F3;
                width:100px;
                height: 35px;
            }
            a:link,a:visited,a:hover
            {
                text-decoration: none;
                color:white;
            }
            .no a:link, .no a:visited, .no a:hover
            {
                text-decoration: none;
                color:#0070F3;
            }
            .yes a:link, .yes a:visited, .yes a:hover
            {
                text-decoration:none;
                color:#f2f2f2;
            }

              
        </style>
    </head>
    <body>
        <div class="outer">                                                                 
            <div class="popup">
               <div class="popup-content">
                <img src="Logout.png" class="logout">
                <text class="logout-text">Logout</text>
                <text class="logout-user">Hi <span style="font-weight:bold; text-decoration:underline;"><?php echo $username; ?></span>, <br>Are you sure you want to log out?</text>
              
                <button class="no"><a href="CustomerNameBg.php" target="HomeMain">NO</a></button>
                <a href="CustomerLogout.php" target="_top"><button type=submit name=submit class="yes">YES</button></a>
               </div>
            </div>
        </div>
    </body>
</html>
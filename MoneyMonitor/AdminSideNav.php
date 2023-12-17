<?php
require "connection.php";

session_start();
$username = $_SESSION['username'];
$query="select* from admin where empid='$username'";
$rows=$conn->query($query);
?>
<html>
    <head>
        <title>Side Nav Features</title>
    </head>
    <style>
        *
        {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:white;
        }
        div.sidenav
        {
           
            height:650px;
            background-color: #FF8BA3;
            align-items: center;
        }
        div.spending
        {
           
            height:102px;
            border-bottom-color: white;
            border-bottom: 20px;
            text-align: center;  
        }
        div.spending:hover{
            scale: 1.2;
        }
        hr
        {
            height:5px;
            background-color:white;
            border:none;
        }
        div.spending img
        {
           margin-top:10px;
        }
        div.spending text
        { 
             font-weight: bold;   
        }
        a:hover, a:visited, a:link
        {
            text-decoration:none;
            color:black;
            
        }
        img{
                border: 8px solid white;
                border-radius:50%;                    
                }
    
        
    </style>
    <body>
        <div class="sidenav">
            <div class="spending" style="height:216px;">
                <br><br>
                <img src="img/<?php foreach($rows as $row){echo $row['image'];} ?>" height="110" width="130">   
                <br>
                <text style="font-size: 20px;"><?php echo $username?></text>
                     
            </div>
            <hr>
            <div class="spending">
                <a href="AdminCustomerNameBg.php" target="HomeMain">
                    <img style="border:none; border-radius:0px" src="LogoHome.png" width="70" height="60"><br>
                    <text>HOME</text>
                   
                </a>
                
            </div>
            <div class="spending">
                <a href="AdminProfile.php" target="HomeMain">
                    <img style="border:none; border-radius:0px" src="LogoProfile.png" width="70" height="60"><br>
                    <text>PROFILE</text>
                  
                </a>
                
            </div>
            <div class="spending">
                <a href="AdminStatistics.php" target="HomeMain">
                    <img style="border:none; border-radius:0px" src="LogoStats.png" width="70" height="60"><br>
                    <text>STATISTICS</text>
    
                </a>
                
            </div>
            <a href="Logout.php" target="_top">
            <div class="spending">
                <button type=submit name=submit style=" cursor:pointer; width:80%; border:none; background-color:#FF8BA3;">
                    <img style="border:none; border-radius:0px" src="LogoLogout.png" width="70" height="60"><br>
                    <text>LOGOUT</text>
                </button>
            </div>
            </a>
        </div>
    </body>
</html>

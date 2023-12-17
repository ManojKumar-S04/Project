<?php
require "connection.php";

session_start();
$username=$_SESSION['username'];

$rows=$conn->query("Select name from admin where empid='$username'")
?>

<html>
    <head>
        <title>Admin Name Bg</title>
        <style>
             *
            {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            div.customer-bg
            {
                position:absolute;
            }
            
          
            div.customer-name:hover , div.customer-logo:hover{
                scale: 1.1;
            }
            
            .customer-logo img
            {
                border-radius:50%;
                border:5px solid white; 
                position:absolute;  
                display: block;
                margin-left:70px;
                
            }
            .mini-outer
            {
                width:400px;
                height:300px;
                position:absolute;
                margin-top:150px;
                margin-left:300px;
                    
            }
            .customer-name
            {
                margin-top:260px;
                text-align: center;  
                text-transform: uppercase;
                color:#FF8BA3;
                font-weight: bold;
           

            }    
        </style>
    </head>
    <body>
        <div class="customer-bg">
            <img src="CustomerName.png" width="1240" height="700">
        </div>
        <div class="mini-outer">
            <div class="customer-logo">
                <img src="LogoMMBlack.png" width="250" height="230">
            </div>
            <h1 class="customer-name">
                <?php foreach($rows as $row){echo strtoupper($row['name']);} ?>
            </h1>
        </div>
        
        
    </body>
</html>
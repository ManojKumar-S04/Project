<?php
require "connection.php";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $issue=$_POST['issue'];
    $message=$_POST['message'];

    $query="insert into query(username,email,issue,message) values('$username','$email','$issue','$message')";
    $conn->query($query);
}

?>

<html>
    <head>
        <title>Queries</title>
        <style>
           *
            {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size:20px;
            }
            div.outer
            {
                width:700px;
                height:500px;
                background-color:#f2f2f2;
                margin-left:180px;
                margin-top:30px;
                position:absolute;
                border-radius:50px;
            }
            
            div.logo
            {
                margin-left:300px;
                margin-top:15px;
            }
            div.table-content
            {
                margin-left:100px;
            }
            table
            {
                width:500px;
                margin-top:20px;
            }
            td
            {
                padding-top:10px;
            }
            input.username, input.email, input.message
            {
                width:500px;
                height:50px;
                
                border:3px Solid #0070F3;
                border-radius:10px;
                

            }
            input.message
            {
                height:100px;  
            }
            input.issue
            {
                accent-color: #0070f3;
            }
            div.button-submit button
            {
                margin-left:280px;
                margin-top:20px;
                width:150px;
                height:50px;
                background-color:#0070F3;
                color:white;
                font-weight:bold;
                border-style:none;
                border-radius:5px;
            }
            div.button-submit button a:link, 
            div.button-submit button a:visited
            {
                text-decoration:none;
                color:white;
            }
            input[type="text"]:focus 
            {
                border-color: #005fd9;
                box-shadow: 0 0 8px 0 #005fd9;
            }

            
           
           
        </style>
    </head>
    <body>
        <form action='' method=post>
        <div class="outer">
            <div class="logo"><img src="LogoMMBlack.png" height="100" width="120"></div>
            <div class="table-content">
                <table >
                    <tr><td colspan="3"><input class="username" type="text" required name="username" placeholder=" Username"></td></tr>
                    <tr><td colspan="3"><input  class="email" type="email" required name="email" placeholder=" Email"></td></tr>
                    <tr>
                        <td><b>Issue</b></td>
                        <td><input type="radio" class="issue" name="issue" value="Technical">Technical</td>
                        <td><input type="radio" class="issue" name="issue" value="Non Technical">Non Technical</td>
                    </tr>
                    <tr><td colspan="3"><input type="text" class=message required type="text" name="message" placeholder=" Drop a Message"></td></tr>
                </table>
            </div>
            <div class="button-submit">
                <button type=submit name=submit>SUBMIT</button>
            </div>
        </div>
        </form>
    </body>
</html>
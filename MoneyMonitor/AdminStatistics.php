<?php
require "connection.php";

$query="Select count(*) from login";
$user_rows=$conn->query($query);
$query="Select count(*)from query";
$query_rows=$conn->query($query);

$path = "visitor-count.txt";

$fp = fopen($path, "r");

$count = fread($fp, 512);

fclose($fp);
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
            }
            div.box-users
            {
                width:300px;
                height:200px;
                position:absolute;
                background-color: #f2f2f2;
                margin-left:100px;
                margin-top:50px;
            }
            div.top-users,div.top-visitors,
            div.top-queries, div.top-view
            {
                width:300px;
                height:70px;
                position: absolute;
                background-color:#FF8BA3; 
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                color:white;
            }
            
            
            div.bottom-users,div.bottom-visitors,
            div.bottom-queries, div.bottom-view
            {
                width:300px;
                height:130px;
                position:absolute;
                background-color:#f2f2f2;
                text-align:center;
                font-size:20px;
                color:#FF8BA3;
                margin-top:70px;
            }
            
            div.box-visitors
            {
                width:300px;
                height:200px;
                position:absolute;
                background-color: #f2f2f2;
                margin-left:500px;
                margin-top:50px;
            }
            div.box-queries
            {
                width:300px;
                height:200px;
                position:absolute;
                background-color: #f2f2f2;
                margin-left:100px;
                margin-top:300px;
            }
            div.box-view
            {
                width:300px;
                height:200px;
                position:absolute;
                background-color: #f2f2f2;
                margin-left:500px;
                margin-top:300px;
            }
            a:link,a:visited, a:hover
            {
                text-decoration: none;
                color:#FF8BA3;
            }
        </style>
    </head>
    <body>
        <div class="outer">
            <a href="AdminStatisticsUsers.php">
            <div class="box-users">
                <div class="top-users"><br>USERS</div>
                <div class="bottom-users">
                    <img src="LogoAdminLogo.png" width="80px" height="80px"><br>
                    <text class="users"><?php foreach($user_rows as $row){echo $row['count(*)'];} ?></text>
                </div>
            </div>
            </a>
            <a href="AdminStatisticsVisitors.php">
            <div class="box-visitors">
                <div class="top-visitors"><br>VISITORS</div>
                <div class="bottom-visitors">
                    <img src="LogoVisitors.png" width="80px" height="80px"><br>
                    <text class="visitors"><?php echo $count; ?></text>
                </div>
            </div>
            </a>
            <a href="AdminStatisticsQueries.php">
                <div class="box-queries">
                    <div class="top-queries"><br>QUERIES</div>
                    <div class="bottom-queries">
                        <img src="LogoMessage.png" width="80px" height="80px"><br>
                        <text class="queries"><?php foreach($query_rows as $row){echo $row['count(*)'];} ?></text>
                    </div>
                </div>
            </a>
            <a href="AdminStatisticsView.php">
            <div class="box-view">
                <div class="top-view"><br>PROFILE VIEW</div>
                <div class="bottom-view">
                    <img src="LogoView.png" width="80px" height="80px"><br>
                    <text class="view">VIEW</text>
                </div>
            </div>
            </a>
        </div>
    </body>
</html>
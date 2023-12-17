<?php 
require "connection.php";

$rows=$conn->query("Select count(username) from login");

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
            div.frame1
            {
                position:absolute;
                width:600px;
                height:550px;
                margin-left: 150px;
                border:2px solid #FF8BA3;
                background-color:#f2f2f2;
               
            
            }      
            div.title
            {
                position:absolute;
                width:600px;
                height:50px;
                background-color:#FF8BA3; 
                display:flex;
                justify-content: center;
             
                
                
            }   
            text
            {
      
                font-weight: bold;
                font-size:18px;
                color:white;
                padding-top:10px;
            }
            #piechart{
                width: 100%;
                height:500px;
                margin: 50px auto  auto 0px;
                position: absolute; 
            }
         
        </style>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['People', 'Count'],
                ['Users',<?php foreach($rows as $row){echo $row['count(username)'];} ?>],
                ['Visitors',<?php echo $count; ?>]
                
                ]);
                var options = {
                                    
                                    colors: ['#DB1f48', '#004369']
                                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data,options);
            }
            </script>

    </head>
    <body>
        <div class="outer">
            <div class="frame1">
                <div class="title"><text>USER/VISITOR</text></div>
                <div id=piechart></div>
            </div>
        </div>
    </body>
</html>
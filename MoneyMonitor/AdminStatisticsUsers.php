<?php
require "connection.php";

$query="select count(gender) from login where gender='Male'";
$m_rows=$conn->query($query);

$query="select count(gender) from login where gender='Female'";
$f_rows=$conn->query($query);

$query="select count(role) from login where role='Student'";
$s_rows=$conn->query($query);

$query="select count(role) from login where role='Employee'";
$e_rows=$conn->query($query);

$query="select count(role) from login where role='Others'";
$o_rows=$conn->query($query);
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
                width:450px;
                height:550px;
                background-color:white;
                border:2px solid #FF8BA3;
            
            }   
            div.frame2
            {
                position:absolute;
                width:450px;
                height:550px;
                margin-left:450px;
                background-color:white;
                border:2px solid #FF8BA3;
     
            }    
            div.title
            {
                position:absolute;
                width:450px;
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

            #columnchart_values{
                width: 430px;
                height:400px;

                margin: 100px auto  auto 10px;
                position: absolute;    
            }
            #piechart{
                width: 430px;
                height:400px;
                
                margin: 100px auto  auto 10px;
                position: absolute; 
            }
         
        </style>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Gender", "Count", { role: "style" } ],
                ['Male',<?php foreach($m_rows as $row){ echo $row['count(gender)']; }?>,'#2986cc'],
                ['Female',<?php foreach($f_rows as $row){ echo $row['count(gender)']; }?>,'#c90076']
            ]);

            var view = new google.visualization.DataView(data);
            
            var options = {
                title: "Gender",
                bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
            }
            </script>

            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['Role', 'Count'],
                ['Student',<?php foreach($s_rows as $row){echo $row['count(role)'];} ?>],
                ['Employee',<?php foreach($e_rows as $row){echo $row['count(role)'];} ?>],
                ['Others',<?php foreach($o_rows as $row){echo $row['count(role)'];} ?>]
                ]);
                var options = {
                                    title:'Profession',
                                    colors: ['#DB1f48','#01949A','#004369']
                                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data,options);
            }
            </script>

    </head>
    <body>
        <div class="outer">
            <div class="frame1">
                <div class="title"><text>MALE/FEMALE</text></div>
                <div id='columnchart_values'></div>
            </div>
            <div class="frame2">
                <div class="title"><text>EMPLOYEE/STUDENT/OTHERS</text></div>
                <div id='piechart'></div>
            </div>
        </div>
    </body>
</html>
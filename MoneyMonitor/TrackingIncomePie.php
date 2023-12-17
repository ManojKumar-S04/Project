<?php
require "connection.php";

session_start();

    $incomeTable=$_SESSION['username']."income";

    $fromdate='2023-11-03';
    $todate='2023-11-16';
    if(isset($_POST['filter'])){
        $fromdate=$_POST['fromdate'];
        $todate=$_POST['todate'];
    }


    $query="select * from $incomeTable where tdate between '$fromdate' and '$todate'";
    $rows=$conn->query($query);
    $color_rows=$conn->query("select * from categoryincome");
?>
<html>
    <head>
        <title>TrackingIncomePie</title>
        <style>
            *
            {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            div.outer
            {
                width:700px;
                height:500px;
                
                margin-left:180px;
                margin-top:30px;
                position:absolute;
            }
            div.time
            {
                margin-left:30px;
                margin-top:50px;
                padding:10px;
                width:640px;
                position:absolute;
                
                align-content: center;
            }
            div.arrow-left
            {
                position: absolute;
                z-index:1;
                
            }
            div.month-year
            {
                position:absolute;
                
                z-index:2;
            }
            div.arrow-right
            {
                position: absolute;
                margin-left:550px;
                z-index:3;
            }
            div.time button
            {
                margin-left:240;
                width:150px;
                height:50px;
                background-color:white;
                color:#0070F3;
                border-color: #0070F3;
                border-radius:5px;
                font-weight: bold;
                font-size:20px;
            }
            div.income button a:link,div.income button a:hover,div.income button a:visited
            {
                text-decoration: none;
                color: white;
            }

            div.month-year button a:link, div.month-year button a:hover,div.month-year button a:visited
            {
                color:#0070F3;
                text-decoration:none;
            }
           
           
            div.expense button, div.income button
            {
                width:150px;
                height:50px;
                border-color:#0070F3;
                
                font-size:20px;
                font-weight: bold;
            }
            div.expense button
            {
                margin-left:190px;
                margin-top:10px;
                position: absolute;
                background-color:white;
                color:#0070F3;
                border-right-style: none;
            }
            div.income button
            {
                margin-left:340px;
                margin-top:10px;
                position: absolute;
                background-color:#0070F3;
                color:white;
                border-left-style: none;
            }
            
            div.expense button a:link,div.expense a:hover,div.expense a:visited
            {
                text-decoration: none;
                color:#0070F3;
                
            }
            div.income button a:link,div.income button a:hover,div.income button a:visited
            {
                text-decoration: none;
                color: white;
                
            }
            

            #piechart{
                width: 500px;
                height:400px;
                margin: 160px auto  auto 90px;
                position: absolute;
                
            }

            div.pie , div.bar
            {
                width:50px;
                height:200px;
                margin-top:550px;
                position:absolute;
            }
            div.pie
            {
                margin-left:440px;
            }
            div.bar
            {
                margin-left:520px;
            }
            div.pie button, div.bar button
            {
                width:80px;
                height:40px;
                border-color:#0070F3;
                font-size:20px;
                font-weight: bold;
            }
            div.pie button
            {
                background-color:#0070F3;
                border-right-style: none;
            }
            div.bar button
            {
                background-color: white;
                border-left-style: none;
                
            }
            div.pie button a:link,div.pie a:hover,div.pie a:visited
            {
                text-decoration: none;
                color:white;
            }
            div.bar button a:link,div.bar button a:hover,div.bar button a:visited
            {
                text-decoration: none;
                color:#0070F3;
            }
            .date-box{
                width:180px;
                height: 35px;
                border: 2px solid;
                border-radius: 10px;
            }

        </style>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
            ['Category', 'Expense'],
            <?php foreach($rows as $row){ ?>
                ['<?php echo $row["category"];?>',<?php echo $row['amount']; ?>],
            <?php } ?>
            ]);
            var options = {
                            colors: [<?php foreach($rows as $row1){
                                            foreach($color_rows as $row2){
                                                if($row1['category']==$row2['category']){?>
                                                    '<?php echo $row2["color"];?>',<?php } ?>
                                <?php }} ?>]
                        };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data,options);
        }
        </script>

    </head>
    <body>
        <div class="outer">
        <div class="time">
                <form action="" method="post">
                    <table cellpadding="10" style="position:absolute;margin-left:50px;height:30px;font-weight:bold;">
                        <tr>
                            <td align="center" colspan="2"><lable>From:</lable>&nbsp;&nbsp;<input type="date" value='<?php echo $fromdate?>' class=date-box name="fromdate">&nbsp;&nbsp;&nbsp;&nbsp;
                            <lable>To:</lable>&nbsp;&nbsp;<input type="date" value='<?php echo $todate?>' class=date-box name="todate"> </td>
                    </tr>
                    <tr>
                        <td colspan=2 align="center"><button type=submit  name=filter style="margin:0px; height:30px;width:95%;">FILTER</button></td>
                    </tr>
                    </table>   
                </form>
            </div>
            <div class="expense"><button><a href="TrackingExpensePie.php" target="HomeMain">EXPENSE</a></button></div>
            <div class="income"><button><a href="TrackingIncomePie.php" target="HomeMain">INCOME</a></button></div>

            <div id="piechart"></div>

        </div>
        <div class="pie"><button><a href="TrackingIncomePie.php" target="HomeMain">PIE</a></button></div>
        <div class="bar"><button><a href="TrackingIncomeBar.php" target="HomeMain">BAR</a></button></div>
    </body>
</html>
<?php
require "connection.php";

session_start();

    $expenseTable=$_SESSION['username']."expense";
    $incomeTable=$_SESSION['username']."income";
    $fromdate='';
    $todate='';
    if(isset($_POST['filter'])){
        $fromdate=$_POST['fromdate'];
        $todate=$_POST['todate'];
    }

    $tot_income=0;
    $tot_expense=0;
    $balance=0;

    $query1="select * from $expenseTable where tdate between '$fromdate' and '$todate'";
    $query2="select * from $incomeTable where tdate between '$fromdate' and '$todate'";

    $exp_rows=$conn->query($query1);
    $inc_rows=$conn->query($query2);

    foreach ($exp_rows as $row){
        $tot_expense+=$row['amount'];

    }
    foreach ($inc_rows as $row){
        $tot_income+=$row['amount'];
    }
    $balance=$tot_income-$tot_expense;


?>

<html>
    <head>
        <title>Spending</title>
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
                margin-top:20px;
                padding:10px;
                width:640px;
                position:absolute;
                
                align-content: center;
            }
            div.arrow-left
            {
                position: absolute;
                z-index:4;
                
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
            button
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
            div.progressbar
            {
                position: absolute;
                margin-left:35px;
                margin-top:150px;
            }
            progress
            {
                width:600px;
                height:25px;
                
            }
            div.table-content
            {
                position:absolute;
                margin-top:180px;
                margin-left:35px;
                overflow-y: auto;  
            }
            div.table-content::-webkit-scrollbar{
                width: 0;
            }
            table
            {
               
                width:600px;
                font-size:20px;
            }
            td
            {
                background-color:#F2F2F2;
                padding-left:5px;
            }
            hr
            {   
                margin-left:35px;
                margin-top:400px;
                width:600px;   
                border-top:4px dotted #0070F3 ;
            }
            div.balance
            {
                margin-left:35px;
                margin-top:50px;
                width:600px;
            }
            div.expense button, div.income button
            {
                width:150px;
                height:50px;
                background-color:#0070F3;
                border-style:none;
                position:absolute;    
                margin-top:550px;
            }
            div.expense button
            {
                margin-left:215px;
                
               
            }
            div.income button
            {
                margin-left:660px;
                margin-top:550px;
            }
            div.expense button a:link, div.expense button a:hover, div.expense button a:visited,
            div.income button a:link, div.income button a:hover, div.income button a:visited
            {
                text-decoration:none;
                color:white;   
            }
            div.expense button a:hover, div.income button a:hover
            {
                color:rgba(255, 255, 255, 0.555);
            }
            div.month-year button a:link, div.month-year button a:hover,div.month-year button a:visited
            {
                color:#0070F3;
                text-decoration:none;
            }
            
            .date-box{
                width:180px;
                height: 35px;
                border: 2px solid;
                border-radius: 10px;
            }
            
        </style>
    </head>
    <body>
        <div class="outer">
            <div class="time">
                <form action="" method="post">
                    <table cellpadding="10">
                        <tr>
                            <td align="center" colspan="2"><lable>From:</lable>&nbsp;&nbsp;<input type="date" class=date-box name="fromdate">&nbsp;&nbsp;&nbsp;&nbsp;
                            <lable>To:</lable>&nbsp;&nbsp;<input type="date" class=date-box name="todate"> </td>
                    </tr>
                    <tr>
                        <td colspan=2 align="center"><button type=submit  name=filter style="margin:0px; height:30px;width:95%;">FILTER</button></td>
                    </tr>
                    </table>   
                </form>
            </div>
            <div class="progressbar">
                <progress value="40" max="100"></progress>
            </div>
            <div class="table-content">
                <table  >
                    <tr>
                        <td style="color:white; background-color: #0070F3;">Income</td>
                        <td style="color:green; font-weight: bold;">Rs.<?php echo $tot_income; ?></td>
                    </tr>
                    <tr>
                        <td style="color:white; background-color: #0070F3;">Expense</td>
                        <td style="color:red; font-weight: bold;">Rs.<?php echo $tot_expense; ?></td>
                    </tr>
                    <?php
                    foreach($exp_rows as $row){?>
                    <tr>
                        <td><?php echo $row['category']; ?></td>
                        <td>Rs.<?php echo $row['amount']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <hr>
            <div class="balance">
                <table>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Balance</td>
                        <td style="color:green; font-weight:bold;">Rs. <?php echo $balance; ?></td>
                    </tr>
                </table>
                
            </div>
            
        </div>
        <div class="expense">
            <button><a href="SpendingExpense.php" target="HomeMain">EXPENSE</a></button>
        </div>
        <div class="income">
            <button><a href="SpendingIncome.php" target="HomeMain">INCOME</a></button>
        </div>
    </body>
</html>


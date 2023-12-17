<?php
require "connection.php";

if(isset($_POST['done'])){
    $category=$_POST['category'];
    $color=$_POST['color'];
    $query="insert into categoryincome(category,color) values('$category','$color')";

    if($conn->query($query)===TRUE){
        header("Location: CategoryIncome.php");
    }
    else{
        echo "<script>alert('Cannot able to add!!!')</script>";
    }
}

?>
<html>
    <head>
        <title>Spending Expense</title>
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
                
                margin-left:180px;
                margin-top:30px;
                position:absolute;
            }
            div.expense , div.income
            {
                width:700px;
                height:200px;
              
                margin-top:50px;
                position:absolute;
            }
            div.expense
            {
                margin-left:190px;
                margin-top:100px;
            }
            div.income
            {
                margin-left:340px;
                margin-top:100px;
            }
            div.expense button, div.income button
            {
                width:150px;
                height:50px;
                border-color:#0070F3;
                background-color: white;
                
                font-weight: bold;
            }
            div.income button
            {
                background-color:#0070F3;
            }
            div.expense button
            {
                border-right-style:none;
            }
            div.expense button a:link,div.expense a:hover,div.expense a:visited
            {
                text-decoration: none;
                color:#0070F3;
            }
            div.income button a:link,div.income button a:hover,div.income button a:visited
            {
                text-decoration: none;
                color:white;
            }
           
            div.table-content
            {
                margin-left:80px;
                position:absolute;
                margin-top:170px;
            }
            table
            {
                width:500px;
            }
            td
            {
                padding:5px;
               
            }
            input
            {
                width:250px; height:30px;
                border-color:#0070F3;
                border-radius: 5px;
            }
            div.done
            {
                width:700px;
                background-color:yellow;
                margin-top:350px;
                position:absolute;
            }
            div.done button
            {
                position:absolute;
                width:80px;
                height:40px;
                background-color: #0070F3;
                color:white;
                font-weight:bold;
                border-radius: 5PX;
                margin-left:320px;
                border-style:none;
                

            }

            div.done button a:link, div.done button a:hover, div.done button a:visited
            {
                text-decoration:none;
                color:white;
            }
            div.done button a:hover
            {
                color:rgba(255, 255, 255, 0.555);
            }
            input[type="text"]:focus 
            {
                border-color: #005fd9;
                box-shadow: 0 0 8px 0 #005fd9;
            }
            
        </style>
    </head>
    <body>
        <div class="outer">
            <div class="expense"><button><a href="CategoryExpenseAddItem.php" target="HomeMain">EXPENSE</a></button></div>
            <div class="income"><button><a href="CategoryIncomeAddItem.php" target="HomeMain">INCOME</a></button></div>
            <form action="" method=post>
            <div class="table-content">
                <table >
                    <tr>
                        <td style="background-color: #0070F3; color:white;font-weight: bold;" >Category Details</td>
                        <td align="right" style="background-color: #0070F3;"><a href="CategoryInfo.html"><img src="Logo.png" width="20" height="20"></a></td>
                        
                        
                    </tr>
                    <tr>
                        <td >Name</td>
                        <td><input type="text" name="category" placeholder="Category" style="border: none;"></td>
                    </tr>
                    <tr>
                        <td >Color</td>
                        <td><input type="text" name="color" placeholder="RGB" style="border: none;"></td>
                    </tr>
                    
                </table>
            </div>
            <div class="done"><button type=submit name=done>DONE</button></div>
        </form>
        </div>
    </body>
</html>
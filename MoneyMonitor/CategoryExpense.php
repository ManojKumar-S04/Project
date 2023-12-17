<?php
    require 'connection.php';
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
            div.expense button
            {
                background-color:#0070F3;
                border-right-style: none;
            }
            div.income button
            {
               
                border-left-style:none;
            }          
            div.expense button a:link,div.expense a:hover,div.expense a:visited
            {
                text-decoration: none;
                color:white;
            }
            div.income button a:link,div.income button a:hover,div.income button a:visited
            {
                text-decoration: none;
                color:#0070F3;
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
                max-width: 300px;
                min-width: none;
                background-color: #F2F2F2;
            }
            div.AddItem
            {
                width:700px;
               
                margin-top:500px;
                position:absolute;
                
            }
            div.AddItem button
            {
                position:absolute;
                width:150px;
                height:40px;
                background-color: #0070F3;
                color:white;
                font-weight:bold;
                border-radius: 5px;
                text-decoration: none;
                border-style: none;

            }
            div.AddItem button
            {
                
                margin-left:255px;
                
            }
            div.AddItem button a:link, div.AddItem button a:hover, div.AddItem button a:visited
            {
                text-decoration:none;
                color:white;
            }
            div.AddItem button a:hover
            {
                color:rgba(255, 255, 255, 0.555);
            }
            
            
        </style>
    </head>
    <body>
        <div class="outer">
            <div class="expense"><button><a href="CategoryExpense.php" target="HomeMain">EXPENSE</a></button></div>
            <div class="income"><button><a href="CategoryIncome.php" target="HomeMain">INCOME</a></button></div>
            <div class="table-content">
                <table >
                    <tr>
                        <td style="background-color: #0070F3; color:white;font-weight: bold;" >P.NO</td>
                        <td align="center" style="background-color: #0070F3; color:white; font-weight: bold;">CATEGORY</td>
                        <td style="background-color: #0070F3; color:white;font-weight: bold;" >COLOR</td>
                    </tr>
                    <?php
                    $query="select * from categoryexpense order by pid";
                    $rows=$conn->query($query);
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td style="width: 20px;" align="center" ><?php echo $row['pid']; ?> </td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="AddItem"><button><a href="CategoryExpenseAddItem.php" target="HomeMain">ADD ITEM</a></button></div>
        </div>
    </body>
</html>
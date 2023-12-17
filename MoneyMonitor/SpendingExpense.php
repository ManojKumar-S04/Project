<?php
require "connection.php";
session_start();
$query="select * from categoryexpense";
$rows=$conn->query($query);
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
                border-right-style:none;
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
               
            }
            input
            {
                width:250px; height:30px;
                border-color:#0070F3;
                border-radius: 5px;
            }
            div.back, div.done
            {
                width:700px;
              
                margin-top:390px;
                margin-left:10px;
                position:absolute;
                
            }
            div.back button, div.done button
            {
                position:absolute;
                width:80px;
                height:40px;
                background-color: #0070F3;
                color:white;
                font-weight:bold;
                border-radius: 5PX;
                border-style:none;
                

            }
            div.back button
            {
                
                margin-left:220px;
                
            }
            div.done button
            {
                
                margin-left:320px;
                
            }
            div.back button a:link, div.back button a:hover, div.back button a:visited,
            div.done button a:link, div.done button a:hover, div.done button a:visited
            {
                text-decoration:none;
                color:white;
            }
            div.back button a:hover, div.done button a:hover
            {
                color:rgba(255, 255, 255, 0.555);
            }
            input:focus 
            {
                border-color: #005fd9;
                box-shadow: 0 0 8px 0 #005fd9;
            }
            
            
        </style>
    </head>
    <body>
        <form action="" method=post>
        <div class="outer">
            <div class="expense"><button><a href="SpendingExpense.php" target="HomeMain">EXPENSE</a></button></div>
            <div class="income"><button><a href="SpendingIncome.php" target="HomeMain">INCOME</a></button></div>
            <div class="table-content">
                <table >
                    <tr>
                        <td style="background-color: #0070F3; color:white;font-weight: bold;" >Transaction Details</td>
                        <td align="right" style="background-color: #0070F3;"><a href="SpendingInfo.html"><img src="LogoInfo.png" width="30" height="25"></a></td>
                        
                        
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Date</td>
                        <td><input type="date" name="tdate" required></td>
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Category</td>
                        <td>
                            <input list="categories" name="category" required autocomplete=off id=category>
                            <datalist id="categories">
                                <?php 
                                    foreach($rows as $row){ 
                                ?>
                              <option value="<?php echo $row['category']; ?>">
                              <?php } ?>
                            </datalist>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Amount</td>
                        <td><input type="text" name="amount" placeholder=" Amount" required></td>
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Note</td>
                        <td><input type="text" name="note" placeholder=" No Note Entered" ></td>
                    </tr>
                </table>
            </div>
            <div class="back"><button><a href="Spending.php" target="HomeMain">BACK</a></button></div>
            <div class="done"><button name=done type=submit>DONE</button></div>
        </div>
        </form>
    </body>
</html>


<?php
if(isset($_POST['done'])){
    $tname=$_SESSION['username']."expense";
    $tdate=$_POST['tdate'];
    $category=$_POST['category'];
    $note=$_POST['note'];
    $amount=$_POST['amount'];
    $query="insert into $tname(tdate,category,amount,note) values('$tdate','$category','$amount','$note')";
    $conn->query($query);


    
}
?>
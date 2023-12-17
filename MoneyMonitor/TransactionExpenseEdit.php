<?php
require "connection.php";
session_start();
$query1="select * from categoryexpense";
$cat_rows=$conn->query($query1);

$expenseTable=$_SESSION['username']."expense";
$id='';
if(isset($_POST['edit'])){
    $id=$_POST['edit'];
}

$query2="select * from $expenseTable where id='$id'";
$exp_rows=$conn->query($query2);


if(isset($_POST['submit'])){
    $tdate=$_POST['tdate'];
    $category=$_POST['category'];
    $amount=$_POST['amount'];
    $note=$_POST['note'];
    $query="update $expenseTable set tdate='$tdate',category='$category',amount='$amount',note='$note' where id= '$id'";
    if($conn->query($query)===TRUE){
        header("Location: TransactionExpense.php");
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
                margin-left:250px;
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
            div.back, div.edit
            {
                width:700px;
                background-color:yellow;
                margin-top:390px;
                margin-left:10px;
                position:absolute;
            }
            div.back button, div.edit button
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
            div.edit button
            {
                margin-left:320px;
                
            }
            div.back button a:link, div.back button a:hover, div.back button a:visited,
            div.edit button a:link, div.edit button a:hover, div.edit button a:visited
            {
                text-decoration:none;
                color:white;
            }
            div.back button a:hover, div.edit button a:hover
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
        <form action='' method=post>
        <div class="outer">
            <div class="expense"><button  style="color:white;">EXPENSE</button></div>

            <div class="table-content">
                <table>
                    <tr>
                        <td style="background-color: #0070F3; color:white;font-weight: bold;" >Transaction Details</td>
                        <td align="right" style="background-color: #0070F3;"><a href="SpendingInfo.html"><img src="LogoInfo.png" width="30" height="25"></a></td>
                        
                        
                    </tr>
                    <?php foreach ($exp_rows as $row){ ?>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Date</td>
                        <td><input type="date" name="tdate" value="<?php echo $row['tdate'] ?>" required></td>
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Category</td>
                        <td>
                            <input list="categories" name="category" required autocomplete=off value="<?php echo $row['category'] ?>" id=category>
                            <datalist id="categories">
                                <?php 
                                    foreach($cat_rows as $row1){ 
                                ?>
                              <option value="<?php echo $row1['category']; ?>">
                              <?php } ?>
                            </datalist>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Amount</td>
                        <td><input type="text" name="amount" value="<?php echo $row['amount'] ?>" placeholder=" Amount"></td>
                    </tr>
                    <tr>
                        <td style="color:#0070F3; font-weight: bold;">Note</td>
                        <td><input type="text" name="note" value="<?php echo $row['note'] ?>" placeholder=" No Note Entered"></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
            <div class="back"><button><a href="TransactionExpense.php" target="HomeMain">BACK</a></button></div>
            <div class="edit"><button type=submit name=submit>EDIT</button></div>
        </div>
        </form>
    </body>
</html>


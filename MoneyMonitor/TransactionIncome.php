<?php
require "connection.php";
session_start();
    $incomeTable=$_SESSION['username']."income";

    $fromdate='';
    $todate='';
    if(isset($_POST['filter'])){
        $fromdate=$_POST['fromdate'];
        $todate=$_POST['todate'];
    }
    $query="select * from $incomeTable where tdate between '$fromdate' and '$todate'";

    $rows=$conn->query($query);
    $count=1;
?>


<html>
    <head>
        <title>TransactionIncome</title>
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
                margin-top:0px;
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
            div.month-year button a:link, div.month-year button a:visited
            {
                text-decoration:none;
                color:#0070F3;
            }
            div.month-year button a:hover
            {
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
                margin-top:100px;
                position: absolute;
                background-color:white;
                color:#0070F3;
                border-right-style: none;
            }
            div.income button
            {
                margin-left:340px;
                margin-top:100px;
                position: absolute;
                background-color:#0070F3;
                color:white;
                border-left-style: none;
            }    
            
            div.expense button a:link, div.expense button a:visited
            {
                text-decoration:none;
                color:#0070F3;
            }
            div.income button a:link, div.income button a:visited
            {
                text-decoration:none;
                color:white;
                
            }
            div.table-content, table
            {
                margin-top:150px;
                width:700px;
                position:absolute;
                font-size:20px;
            }
           
            div.edit button
            {
                width:50px;
                height:20px;
                background-color:#0070F3;
                color:white;
                margin-top:-10px;
                margin-left:25px;
                position:absolute;
                border-style: none;
                border-radius: 3px;
            }
            div.delete button
            {
                width:50px;
                height:20px;
                background-color:#BE2A68;
                color:white;
                border-style: none;
                margin-left:82px;
                margin-top:-10px;
                position:absolute;
                border-style: none;
                border-radius: 3px;
            }
            table,td,th
            {
                
                border:2px solid #f2f2f2;
                border-collapse: collapse;  
            }
            th
            {
                background-color:#0070F3;
                color:white;
                text-align:center;
            }
            td
            {
                padding-top:10px;
                padding-left:10px;
                padding-bottom:10px;
            }
            td.button-edit-delete
            {
                padding-left:0px;
            }
            div.edit button a:link, div.edit button a:visited,
            div.delete button a:link, div.delete button a:visited
            {
                text-decoration:none;
                color:white;
            }
            div.edit button a:hover, div.delete button a:hover
            {
                text-decoration:none;
                color:rgba(255, 255, 255, 0.555);
                
            }
            .date-box{
                
                width:270px;
                height: 35px;
                border: 2px solid;
                border-radius: 10px;
            }
            

        </style>
    </head>
    <body>
        <form action='' method=post>
        <div class="outer">
        <div class="time">
           
           <table cellpadding="10" style=" position:absolute; margin-left:-40px; width:700px">
               <tr>
                   <td align="center" colspan="2"><lable>From:</lable>&nbsp;&nbsp;<input type="date" class=date-box name="fromdate">&nbsp;&nbsp;&nbsp;&nbsp;
                   <lable>To:</lable>&nbsp;&nbsp;<input type="date" class=date-box name="todate"> </td>
           </tr>
           <tr>
               <td colspan=2 align="center"><button type=submit  name=filter style="margin:0px; height:30px;width:95%;">FILTER</button></td>
           </tr>
           </table>   
      
   </div>
            <div class="expense"><button><a href="TransactionExpense.php" target="HomeMain">EXPENSE</a></button></div>
            <div class="income"><button><a href="TransactionIncome.php" target="HomeMain">INCOME</a></button></div>  
            
            <div class="table-content">
                <table>
                    <tr>
                        <th>T.NO</th>
                        <th>DATE</th>
                        <th>CATEGORY</th>
                        <th>AMOUNT</th>
                        <th>NOTE</th>
                        <th>EDIT/DELETE</th>
                    </tr>
                    <?php foreach($rows as $row){?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['tdate'];?></td>
                        <td><?php echo $row['category'];?></td>
                        <td><?php echo $row['amount'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td class="button-edit-delete">
                            <div class="delete"><button class="delete" value="<?php echo $row['id']; ?>" type=submit name=delete>Delete</button></div>
                            </form> 
                            <form action='TransactionIncomeEdit.php' method=post>
                                <div class="edit"><button type=submit name=edit value="<?php echo $row['id']; ?>">Edit</button></div>
                            </form>                         
                        </td>
                    </tr>
                    <?php $count++;} ?>
                </table>
            </div>
        </div>
        
    </body>
</html>

<?php
if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $query="delete from $incomeTable where id='$id'";
    $conn->query($query);
}
?>

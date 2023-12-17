<?php
require "connection.php";

$rows=$conn->query("select * from query");
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
            table
            {
                position:absolute;
                margin-top:10px;
                background-color:white;
                font-size: 20px;
                text-align:center;
                margin-left:10px;
                
            }
            th
            {
                color:#FF8BA3;
            }
         
            th,td
            {
                
                padding-left:10px;
                padding-right:10px;
                padding-top:10px;
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <div class="outer">
            <table>
                <tr>
                    <th>NO</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ISSUE TYPE</th>
                    <th>QUERIES</th>
                </tr>
                <?php foreach($rows as $row){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['issue']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>
<?php
require "connection.php";

$rows=$conn->query("select * from login");
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
                    <th>PHONE</th>
                    <th>GENDER</th>
                    <th>PROFESSION</th>
                </tr>
                <?php foreach($rows as $row){ $i=1; ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobileno']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                </tr>
                <?php $i++; } ?>
            </table>
        </div>
    </body>
</html>
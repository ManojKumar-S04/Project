<?php
require "connection.php";

session_start();
$username = $_SESSION['username'];
$query="select* from login where username='$username'";
$rows=$conn->query($query);

$exp_table=$username."expense";
$inc_table=$username."income";

$sql="select sum(amount) from $exp_table";
$exp=$conn->query($sql);
$sql="select sum(amount) from $inc_table";
$inc=$conn->query($sql);
 

                            if(isset($_FILES['file']['name'])){
                            $filename=$_FILES['file']['name'];
                            $filesize=$_FILES['file']['size'];
                            $tmpname=$_FILES['file']['tmp_name'];

                            $validimageextension=['jpg','jpeg','png'];
                            $imageextension=explode('.',$filename);
                            $imageextension=strtolower(end($imageextension));
                            if(!in_array($imageextension,$validimageextension)){
                                echo "<script>alert('Invalid Image Extension(Add .jpg, .jpeg, .png)');</script>";
                            }
                            else if($filesize>1200000){
                                echo "<script>alert('Image size is Too Large!!!');</script>";
                            }
                            else{
                                $newimagename=uniqid();
                                $newimagename.=".". $imageextension;

                                move_uploaded_file($tmpname,'img/'.$newimagename);
                                $query="update login set image='$newimagename' where username='$username'";
                                $conn->query($query);
                                echo "<script>
                                          document.location.href = '/PHP-MONEYMONITOR-Copy/Profile.php';
                                      </script>";
                            }
                            }

?>
<html>
    <head>
        <title>Profile</title>
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
            div.profile
            {
                width:250px;
                height:550px;
                background-color:#0070F3;
            }
            table
            {
                width:650px;
                height:550px;
                margin-left:250px;
                background-color: white;
                
            }
            td
            {
                padding-left:50px;
                background-color:#f2f2f2;
                font-size:20px;
                color:#0070F3;
                
            }
            td.q
            {
                color:#A5A5A5;
                font-weight:bold;
            }
            button
            {
                width:100px;
                height:35px;
                background-color:#0070F3;
                color:white;
                font-weight: bold;
                border-radius:5px;
                margin-left:50px;
                border-color: #0070F3;
            }
            text
            {
                margin-top:10px;
                margin-left:80px;
                position:absolute;
                font-size:25px;
                color:white;
            }
            div.img
            {
                position:absolute;
                margin-top:90px;
                
                
            }
            text.user-name
            {
                margin-left:0px;
                position:absolute;
                font-weight:bold;
            }
            .btn-upload
            {
                width:120px;
                height:35px;
                background-color:white;
                color:#0070F3;
                font-weight: bold;
                font-size:10px;
                border-radius:5px;
                overflow:hidden;
                border-color:white;
                position:absolute;
                margin-top:50px;
                margin-left:60px;
                cursor: pointer;
            }
            text.income-title
            {
                margin-top:-20;
                color:#00B050;
                font-weight: bold;
                font-size:20px;
            }
            text.expense-title
            {
                margin-top:-20;
                color:red;
                font-weight: bold;
                font-size:20px;
            }
            img.income-icon
            {
                margin-top:-50px;
                border:0;
                margin-left:75px;
            }
            img.expense-icon
            {
                margin-top:-50px;
                border:0;
                margin-left:75px;
            }
            text.expense-result, text.income-result
            {
                margin-top:-10px;
                font-weight: bold;
                color:#00B050;
                font-size:20px;
            }
            text.expense-result
            {
                color:red;
    
            }
            .btn-upload input[type='file']{
                margin-top:-30px;
                margin-left:100px;
                position:relative;
                transform: scale(2.5);
                z-index:2;
                opacity: 0;
                cursor:pointer;
            }
            h1.upload{
                color:#0070F3;
                position:relative;
                z-index:1;
                font-weight: bold;
                font-size:20px;
                margin-top:5px;
                cursor:pointer;
            }
            h1.username{
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                width:117%;
                color:white;
                position:absolute;
                font-weight: bold;
                font-size:20px;
                margin-top:5px;
            }
            img{
                border: 8px solid white;
                border-radius:50%;                    
                }
            
        </style>
    </head>
    <body>
        <div class="outer">
            <div class="profile">
                <text>PROFILE</text>
                <div class="img">
                    <center>
                        <img src="<?php foreach($rows as $row){echo "img/" . $row['image'];} ?>" style="margin-left:30px;" height="140" width="170">
                        <br>
                        <h1 class=username> <?php echo $username ?></h1>  
                        <div class="btn-upload"><h1 class=upload>UPLOAD</h1>
                            <form id=form class=form action='' enctype=multipart/form-data method=post>
                            <input type="file" name="file" id=image accept=".jpg, .jpeg, .png">
                            </form>
                            <script type="text/javascript">
                                document.getElementById('image').onchange=function(){
                                    document.getElementById('form').submit();
                                }
                            </script>
                            
                        </div>
                    </center>
                    
                                     
                </div>
                <table>
                    <tr rowspan="2">
                        <td colspan="2" align="center" style="font-size:20px; color:#0070F3; font-weight:bold">PEROSNAL DETAILS</td>
                    </tr>
                    <?php foreach($rows as $row){ ?>
                    <tr>
                        <td class="q">Email</td>
                        <td> <?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="q">Phone</td>
                        <td><?php echo $row['mobileno'] ?></td>
                    </tr>
                    <tr>
                        <td class="q">Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                        <td class="q">Profession</td>
                        <td><?php echo $row['role'] ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td><a href="ProfileEditPersonalDetails.php"><button>EDIT PROFILE</button></a></td>
                        <td><a href="ProfileEditPassword.php"><button>EDIT PIN</button></a></td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <td colspan=2 align="center" style="font-size:20px; color:#0070F3; font-weight:bold">YOUR TRANSACTION</td>
                    </tr>
                    <tr>
                        <td>
                            <text class=income-title >INCOME</text><br><br>
                            <img class=income-icon src="LogoIncome.png" width="90" height="80"><br>
                            <text class="income-result">RS.<?php foreach($inc as $row){ echo $row['sum(amount)'];} ?></text>
                        </td>
                        <td>
                            <text class=expense-title >EXPENSE</text><br><br>
                            <img class=expense-icon src="LogoExpense.png" width="90" height="80" ><br>
                            <text class="expense-result">RS.<?php foreach($exp as $row){ echo $row['sum(amount)'];} ?></text>
                        </td>
                        
                    </tr>
                </table>
            </div>
            
        </div>
    </body>
</html>

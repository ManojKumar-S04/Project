<?php
require "connection.php";

session_start();
$username = $_SESSION['username'];
$query="select* from admin where empid='$username'";
$rows=$conn->query($query);
 

                            if(isset($_FILES['file']['name'])){
                                echo "<style>
                                img{
                                    border: 8px solid #A5A5A5;
                                    border-radius:50%;
                                }</style>";
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
                                $query="update admin set image='$newimagename' where empid='$username'";
                                $conn->query($query);
                                echo "<script>
                                          document.location.href = '/PHPPROJECT-CLONE/AdminProfile.php';
                                      </script>";
                            }
                            }

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
            div.profile
            {
                width:250px;
                height:550px;
                background-color:#FF8BA3; 
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
                color:#FF8BA3;
                
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
                background-color:#FF8BA3;
                color:white;
                font-weight: bold;
                border-radius:5px;
                margin-left:50px;
                border-color: #FF8BA3;
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
            text.admin-name
            {
                position:absolute;
                margin-left:25px;
                font-weight:bold;
            }
            .btn-upload
            {
                width:120px;
                height:35px;
                background-color:white;
                color:#FF8BA3;
                font-weight: bold;
                border-radius:5px;
               
                border-color:white;
                position:absolute;
                margin-top:50px;
                margin-left:60px;
                
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
                color:#FF8BA3;
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
                        <td colspan="2" align="center" style="font-size:20px; color:#FF8BA3; font-weight:bold">PEROSNAL DETAILS</td>
                    </tr>
                    <?php foreach($rows as $row) {?>
                    <tr>
                        <td class="q">Name</td>
                        <td><?php echo $row['name'] ?></td>
                    </tr>
                    <tr>
                        <td class="q">Email</td>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="q">Mobile</td>
                        <td><?php echo $row['mobileno'] ?></td>
                    </tr>
                    <tr>
                        <td class="q">Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td><a href="AdminProfileEditPersonalDetails.php"><button>EDIT PROFILE</button></a></td>
                        <td><a href="AdminProfileEditPassword.php"><button>EDIT PIN</button></a></td>
                    </tr>
                </table>
            </div>
            
        </div>
    </body>
</html>

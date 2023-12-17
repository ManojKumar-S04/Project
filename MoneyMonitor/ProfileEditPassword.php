<?php
require "connection.php";

session_start();
$username=$_SESSION['username'];

$query="select * from login where username='$username'";
$rows=$conn->query($query);
foreach($rows as $row){
    $pwd=$row['password'];
}
if(isset($_POST['submit'])){
    $old_pwd=$_POST['old-pwd'];
    $new_pwd=$_POST['new-pwd'];
    if($old_pwd==$pwd){
        $conn->query("update login set password='$new_pwd' where password='$pwd'");?>
        <script>alert("Successfully Changed!!!")</script>
       <?php header("Location: Profile.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="ProfileEditPassword.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        img{
            border-radius:50%;
            border:5px solid white;
        }
    </style>

</head>

<body>

    <div class="d-flex flex-column justify-content-center  bg">
        <form action='' method=post>
        <div class="sign-in-bg p-3 text-center">
            <img src="<?php foreach($rows as $row){echo "img/" . $row['image'];} ?>" width=80px height=80px>
            <h1 class="modify-page-heading mb-4"><?php echo $username ?></h1>
            <div class="inputWithIcon mb-3">
                <input type="password" class="username-input" name=old-pwd placeholder="Old Password">
                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>



            <div class="inputWithIcon mb-3">
                <input type="password" class="username-input" name=new-pwd placeholder="New Password">
                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>



            <div class="mb-3">
                <button type=submit name=submit class="modify-btn">CHANGE PASSWORD</button>
            </div>


        </div>
        </form>

    </div>
</body>

</html>
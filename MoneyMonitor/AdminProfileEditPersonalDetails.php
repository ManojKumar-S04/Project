<?php
require "connection.php";

session_start();
$username = $_SESSION['username'];
$query="select* from admin where empid='$username'";
$rows=$conn->query($query);
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];

    $query="update admin set name='$name',email='$email',mobileno='$mobileno' where empid='$username'";
    if(($conn->query($query)===TRUE)){
        
        header("Location: AdminProfile.php");
        
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="AdminProfileEditPersonalDetails.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        img{
                border: 8px solid white;
                border-radius:50%;                    
                }
    </style>

</head>

<body>

    <div class="d-flex flex-column justify-content-center  bg">
        <form action='' method=post> 
        <div class="sign-in-bg p-3 text-center">
            <img src="<?php foreach($rows as $row){ echo "img/".$row['image'];} ?>" width=80px height=80px>
            <h1 class="modify-page-heading mb-4"><?php echo $username ?></h1>
            <div class="inputWithIcon mb-3">
                <input type="text" class="username-input" name=name value='<?php echo $row['name']; ?>' placeholder="Change name">
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <?php foreach($rows as $row){ ?>

            <div class="inputWithIcon mb-3">

                <input type="text" class="username-input" value='<?php echo $row['email']; ?>' name=email placeholder="Change Email">
                <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="inputWithIcon mb-3">

                <input type="text" class="username-input" value=<?php echo $row['mobileno'];} ?> name=mobileno placeholder="Change Mobile no">
                <i class="fa fa-mobile fa-lg fa-fw" aria-hidden="true"></i>
            </div>

            <div class="mb-3">
                <button type=submit name=submit class="modify-btn">Modify</button>
            </div>
            </form>

        </div>



    </div>
</body>

</html>
<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: sign-in-section.php");
    die();
}
?>
<html>
    <frameset rows="9%,87%,4%" frameborder="0" name="wholeSite">
        <frame src="AdminTopNav.html" name="HomeNav" scrolling="no"></frame>
        <frameset cols="18%,*" frameborder="0">
            <frame src="AdminSideNav.php" name="HomeNav" scrolling="no"></frame>
            <frame src="AdminCustomerNameBg.php" name="HomeMain" scrolling="no"></frame>
        </frameset>
        <frame src="AdminHomeFooter.html" name="HomeNav" scrolling="no"></frame>
    </frameset>
</html>
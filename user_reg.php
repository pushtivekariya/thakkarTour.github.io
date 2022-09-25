<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php');
    ?>
</head>

<body>


    <!-- header section start  -->
    <section class="header">
        <?php
        include('nav.php');
        ?>
    </section>
    <!-- header section end -->

    <div class="heading" style="background:url(imgs/fhead.jpg) no-repeat">
        <h1>register</h1>
    </div>
    <!-- booking section start -->
    <section class="booking">
        <h1 class="heading-title">registration form</h1>
        <form method="post" class="book_form" action="">

            <div class="flex">
                <div class="inputbox">
                    <span>user-name :</span>
                    <input type="text" placeholder="enter your name" name="uname">
                </div>

                <div class="inputbox">
                    <span>password :</span>
                    <input type="password" placeholder="create password" name="upass">
                </div>

            </div><br>
            <a href="user_log.php" style="font-size: 1.5rem ; text-decoration:underline;color:var(--main-color)">login now!</a><br>
            <input type="submit" value="register" class="btn" name="send">
        </form>
    </section>
    <!-- booking section end -->

    <!-- footer section start  -->
    <section id="footer">
        <?php
        include("footer.php");
        ?>
    </section>
</body>

</html>

 <!-- registration form code -->
<?php

include('conn.php');
if (isset($_POST['send'])) {
        session_start();
        if (!isset($_SESSION)) {
            session_start();
          }
    //  this line is comment because session is start on nav.php file.
    $uq = "SELECT * FROM user_reg WHERE uname='" . $_POST['uname'] . "'  AND upass='" . $_POST['upass'] . "'";
    $urs = mysqli_query($con, $uq);
    $num = mysqli_num_rows($urs);
    if ($num == 1) {
        echo "<script>alert('username and password is already exist!');</script>";
    } else {
        $reg = "insert into user_reg values('" . $_POST['uname'] . "','" . $_POST['upass'] . "' )";
        mysqli_query($con, $reg);
        echo "<script>alert('congrats! for registration login now!');</script>"; 
        header('location:user_log.php');
    }
}
?>
<?php
include('conn.php');
if (isset($_POST['lsend'])) {
    $ulq = "SELECT * FROM user_reg WHERE uname='" . $_POST['uname'] . "' && upass='" . $_POST['upass'] . "';";
    $ulrs = mysqli_query($con, $ulq);
    $num = mysqli_num_rows($ulrs);
    if ($num == 1) {
        session_start();
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['logid'] = $_POST['uname'];
        header('location:package.php');
    } else {
     echo"<script>alert('user not exist please register !')</script>";
        
        // header('location:user_log.php');
    }
}
?>
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
        <h1>login</h1>
    </div>
    <!-- booking section start -->
    <section class="booking">
        <h1 class="heading-title">login with your credential!</h1>
        <form action="log_frm.php" method="post" class="book_form">

            <div class="flex">
                <div class="inputbox">
                    <span>user-name :</span>
                    <input type="text" placeholder="enter your name" name="uname">
                </div>

                <div class="inputbox">
                    <span>password :</span>
                    <input type="password" placeholder="enter ypur password" name="upass">
                </div>

            </div>
            <br>
            <a href="user_reg.php" style="font-size: 1.5rem ; text-decoration:underline;color:var(--main-color)">if you are new user , register now!</a><br>
            <input type="submit" value="submit" class="btn" name="lsend" >
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
<!-- login form code -->
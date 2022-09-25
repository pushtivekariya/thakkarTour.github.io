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
        <h1>admin login</h1>
    </div>
<!-- php form code -->
<?php
include('conn.php');

if (isset($_POST['submit'])) {
    $q = "SELECT * FROM ad_log WHERE admin_name='" . $_POST['aname'] . "' && admin_password='" . $_POST['pass'] . "'";
    $rs = mysqli_query($con, $q);
    if (mysqli_num_rows($rs) == 1) {
        session_start();
        $_SESSION['adlogid'] = $_POST['aname'];
        header('location:adpg1.php');
    } else {
        echo"<script>alert('incorrect detail');</script>";
}
}
?> 


    <!-- admin login section start -->
    <section class="booking">
        <h1 class="heading-title">login with your credential!</h1>
        <form  method="post" class="book_form">

            <div class="flex">
                <div class="inputbox">
                    <span>admin name :</span>
                    <input type="text" placeholder="enter admin name" name="aname">
                </div>
                <div class="inputbox">
                    <span>passsword :</span>
                    <input type="password" placeholder="enter admin password" name="pass">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="submit">
        </form>
    </section>
    <!-- admin login section end -->
    <!-- footer section start  -->
    <section id="footer">
        <?php
        include("footer.php");
        ?>
    </section>

</body>

</html>
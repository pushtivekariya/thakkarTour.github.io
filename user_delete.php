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
        <h1 class="heading-title">contact for cancel trip!</h1>
        <form method="post" class="book_form" action="">

            <div class="flex">
                <div class="inputbox">
                    <span>user-name :</span>
                    <input type="text" placeholder="enter your name" name="uname">
                </div>

                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your phone number" name="mobile" required>
                </div>

                <div class="inputbox">
                    <span>reason :</span>
                    <textarea name="reason" class="text" cols="50" rows="5" placeholder="write reason for cancel trip..."></textarea>
                </div>

            </div><br>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <?php
    include('conn.php');
    if (isset($_POST['send'])) {
        $dtq = "insert into del_trip values ('','" . $_POST['uname'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['reason'] . "');";
        $dtrs = mysqli_query($con, $dtq);
        if ($dtrs) {
            header('location:home.php');
        }
        else{
            echo"<script>alert('please enter valid data!');</script>";
        }
    }
    ?>
    <!-- booking section end -->
    <!-- footer section start  -->
    <section id="footer">
        <?php
        include("footer.php");
        ?>
    </section>
</body>

</html>
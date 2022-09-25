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
        <h1>Book-Now</h1>
    </div>
    <!-- booking section start -->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action=" " method="post" class="book_form">

            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" require>
                </div>
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your phone number" name="phone" required>
                </div>
                <div class="inputbox">
                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                <div class="inputbox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location" required>
                </div>
                <div class="inputbox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div>
                <div class="inputbox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" required id="arrivals">
                </div>
                <div class="inputbox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" required id="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
            <input type="submit" value="update your trip" class="btn" name="update">
           <a href="user_delete.php" class="btn">cancel your trip</a>

        </form>
        <script>
            var date = new Date();
            var day = date.getDate();
            if (day < 10) {
                day = "0" + day;
            }
            var month = date.getMonth() + 1;
            if (month < 10) {
                month = "0" + month;
            }
            var year = date.getUTCFullYear();
            var fulldate = year + "-" + month + "-" + day;
            console.log(fulldate);
            document.getElementById('arrivals').setAttribute('min', fulldate)
        </script>
        <script>
            var date = new Date();
            var day = date.getDate();
            if (day < 10) {
                day = "0" + day;
            }
            var month = date.getMonth() + 1;
            if (month < 10) {
                month = "0" + month;
            }
            var year = date.getUTCFullYear();
            var fulldate = year + "-" + month + "-" + day;
            console.log(fulldate);
            document.getElementById('leaving').setAttribute('min', fulldate)
        </script>
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
<!-- database coding for insertion -->
<?php
include('conn.php');
if (isset($_POST['send'])) {
    $q = "insert into book_form values('','" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','" . $_POST['address'] . "','" . $_POST['location'] . "','" . $_POST['guests'] . "','" . $_POST['arrivals'] . "','" . $_POST['leaving'] . "');";
    if ($rs = mysqli_query($con, $q))
        echo "<script>alert('congrats! for registration');</script>";
    else
        echo mysqli_error($con);
}
?>

<!-- update coding -->
<?php
if (isset($_POST['update'])) {
    $uq = "update book_form set email='" . $_POST['email'] . "',phone='" . $_POST['phone'] . "',address='" . $_POST['address'] . "',location='" . $_POST['location'] . "',guests='" . $_POST['guests'] . "',arrivals='" . $_POST['arrivals'] . "',leaving='" . $_POST['leaving'] . "' where name='" . $_POST['name'] . "';";
    $urs = mysqli_query($con, $uq);
    if ($urs) {
        echo "<script>alert('updated');</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
<!-- delete coding -->
 <?php
// if(isset($_POST['delete'])){
// $dq = "delete from book_form where name='" . $_POST['name'] . "'";
// $drs = mysqli_query($con, $dq);
// if ($drs) {
//     echo "<script>alert('deleted');</script>";
// } else {
//     echo mysqli_error($con);
// }
// } 
?>
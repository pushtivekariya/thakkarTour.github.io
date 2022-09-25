<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php');
    ?>
</head>

<body>
<section class="header">
<a href="home.php" class="logo">travel.</a>
<nav class="navbar">
  <a href="adpg1.php">admin home</a>
  
  
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</section>

    <!-- header section start  -->

    <!-- header section end -->

    <div class="heading" style="background:url(imgs/fhead.jpg) no-repeat">
        <h1>manage data</h1>
    </div>
    <!-- booking section start -->
    <section class="booking">
        <h1 class="heading-title"></h1>
        <form action=" " method="post" class="book_form">

            <div class="flex">
                <!-- database coding -->
                <?php
                include('conn.php');
                $ids = $_GET['id'];
                $qu = "select * from book_form where id={$ids}";
                $data = mysqli_query($con, $qu);
                $arrdata = mysqli_fetch_array($data);
                if (isset($_POST['update'])) {
                    $updateid = $_GET['id'];
                    $upq = "update book_form set name='" . $_POST['name'] . "',email='" . $_POST['email'] . "',phone='" . $_POST['phone'] . "',address='" . $_POST['address'] . "',location='" . $_POST['location'] . "',guests='" . $_POST['guests'] . "',arrivals='" . $_POST['arrivals'] . "',leaving='" . $_POST['leaving'] . "' where id=$updateid;";
                    $urs =mysqli_query($con,$upq);
                    if($urs){
                        ?>
                        <script>alert("updated");</script>
                        <?php
                        header('location:adpg1.php');
                    }
                }

                ?>
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" value="<?php echo $arrdata['name']; ?>">
                </div>
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" value="<?php echo $arrdata['email']; ?>">
                </div>
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your phone number" name="phone" value="<?php echo $arrdata['phone']; ?>">
                </div>
                <div class="inputbox">
                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address" value="<?php echo $arrdata['address']; ?>">
                </div>
                <div class="inputbox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location" value="<?php echo $arrdata['location']; ?>">
                </div>
                <div class="inputbox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" value="<?php echo $arrdata['guests']; ?>">
                </div>
                <div class="inputbox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" value="<?php echo $arrdata['arrivals']; ?>" id="arrivals">
                </div>
                <div class="inputbox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" value="<?php echo $arrdata['leaving']; ?>" id="leaving">
                </div>
            </div>
            <input type="submit" value="update" class="btn" name="update">
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

</body>

</html>
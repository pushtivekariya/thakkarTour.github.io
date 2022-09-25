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

    <div class="heading" style="background: url(imgs/fhead.jpg) no-repeat;" >
        <h1>About us</h1>
    </div>
    <!-- about section start -->
<section class="about">
    <div class="image">
        <img src="imgs/extra.jpg" alt="">
    </div>
    <div class="content">
        <h3>why choose us?</h3>
        <p>The powerful inclination of American voyagers to travel more nowadays is something that keeps us inspired to satisfy our vacation necessities. Our vision to give you a consistent occasion encounter makes us one of the main visit administrators in the regularly extending travel industry.</p>
        <p>To guarantee that you have a satisfying occasion and healthy encounters, all our vacation administrations are available to your no matter what. On your universal occasion, we guarantee that you are very much outfitted with outside trade (Forex Cards, Currency Notes), visa, and travel protection.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destination</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
    </div>
</section>
    <!-- about section end -->
    <!-- review section start -->
<section class="review">
<h1 class="heading-title">client reviews</h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Very good for the most part. One thing that would have helped was to have known that we were definitely being picked up for our drive to the airport on departure. Fortunately we had the phone number of the driver who collected us on arrival and he was able to help us. Our indecision about our pickup was caused by the number of times our flight home was changed.</p>
                <h3>pushti vekariya</h3>
                <span>student</span>
                <img src="imgs/per1.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Your service was great. Unfortunately Jetstar cancelled our Sydney - Brisbane flight when we arrived in Sydney. We had to purchase tickets with Virgin to get home ( $390.00 ) We will never fly Jetstar again. Hopefully I can get a refund from them.</p>
                <h3>mansi malaviya</h3>
                <span>student</span>
                <img src="imgs/per2.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>We did not get the reference for our flights via email and had to chase it up with you guys over a weekend. It to long for you to respond and we had to get the detail by another means. You guys need to have more availability over the weekends.</p>
                <h3>person3</h3>
                <span>traveler</span>
                <img src="imgs/per5.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Your service was great. Unfortunately Jetstar cancelled our Sydney - Brisbane flight when we arrived in Sydney. We had to purchase tickets with Virgin to get home ( $390.00 ) We will never fly Jetstar again. Hopefully I can get a refund from them.</p>
                <h3>person4</h3>
                <span>traveler</span>
                <img src="imgs/per4.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Very good for the most part. One thing that would have helped was to have known that we were definitely being picked up for our drive to the airport on departure. Fortunately we had the phone number of the driver who collected us on arrival and he was able to help us. Our indecision about our pickup was caused by the number of times our flight home was changed.</p>
                <h3>person5</h3>
                <span>traveler</span>
                <img src="imgs/per3.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Your service was great. Unfortunately Jetstar cancelled our Sydney - Brisbane flight when we arrived in Sydney. We had to purchase tickets with Virgin to get home ( $390.00 ) We will never fly Jetstar again. Hopefully I can get a refund from them.</p>
                <h3>person6</h3>
                <span>traveler</span>
                <img src="imgs/per6.jpg" alt="">
            </div>
        </div>
    </div>
    <script>
      var swiper = new Swiper(".reviews-slider", {
        loop:true,
        spaceBetween:20,
        autoHeight:true,
        grabCursor:true,
        breakpoints: {
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>
</section>
    <!-- review section end -->
    <!-- footer section start  -->
    <section id="footer">
        <?php
        include("footer.php");
        ?>
    </section>
</body>

</html>
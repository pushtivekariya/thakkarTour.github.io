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
    <!-- home section start -->
    <section class="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide" style="background:url(imgs/slide2.jpg) no-repeat; ">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around your life..</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(imgs/slide1.jpg) no-repeat; ">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around your life..</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(imgs/slide3.jpg) no-repeat; ">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around your life..</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(imgs/slide4.jpg) no-repeat; ">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around your life..</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- home section end -->

    <!-- service section start -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="imgs/hills.png" alt="">
                <h3 class="headline">adventure</h3>
            </div>

            <div class="box">
                <img src="imgs/tourguide.png" alt="">
                <h3 class="headline">tour guide</h3>
            </div>

            <div class="box">
                <img src="imgs/trakking.png" alt="">
                <h3 class="headline">trekking</h3>
            </div>

            <div class="box">
                <img src="imgs/campfire.png" alt="">
                <h3 class="headline">camp-fire</h3>
            </div>

            <div class="box">
                <img src="imgs/offroad.png" alt="">
                <h3 class="headline">off road</h3>
            </div>

            <div class="box">
                <img src="imgs/campfire.png" alt="">
                <h3 class="headline">camping</h3>
            </div>
        </div>

    </section>
    <!-- service section end -->

    <!-- home about section start -->
    <section class="home-about">
        <div class="image">
            <img src="imgs/aboutus.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>thakkar tour

“Travel is the main thing you purchase that makes you more extravagant”. We, at thakkar tour, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly.

We have been moving excellent encounters for a considerable length of time through our cutting-edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section end -->

    <!-- home package section start -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="imgs/6shimala.jpg" alt="">
                </div>
                <div class="content">
                    <h3>shimala manali</h3>
                    <p>With the help of flight, you can reach Manali very early and then enjoy Manali, the priceless gift given by God.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="imgs/2goa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>goa</h3>
                    <p>Goa is not just about the beaches and party life… there is definitely more than that but we are not exploring much.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="imgs/3maha.jpg" alt="">
                </div>
                <div class="content">
                    <h3>mahabaleshvar</h3>
                    <p>You are the most beautiful, purest, green, peaceful place to me Mahabaleshwar and you make me.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
    <!-- home package section end -->
    <!-- home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>including all services!</h3>
            <p>Travel services are services offered by thakkar tour, including passenger transport services, air travel services, car hire services, road transport services, rail transport services, sea transport services, booking and reservation of travel services, travel ticket reservation services, tourist travel information services, sight seeing tour and cruise arranging services, package holiday services for arranging travel, air transport services, transport and delivery of goods services.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section end -->
    <!-- footer section start  -->
    <section id="footer">
        <?php
        include("footer.php");
        ?>
    </section>
    <!-- footer section end -->
</body>

</html>
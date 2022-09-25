<?php
session_start();
if (!isset($_SESSION['logid'])) {
  $_SESSION['logid'] = 'please login!';
}
?>
<style>
  h2 {
    font-size: 2rem;
    margin-left: 180px;
  }
</style>

<a href="home.php" class="logo">travel.<img style="height: 50px;width: 50px;" src="imgs/logo.png" alt="com"></a>
<h2>welcome : <?php echo $_SESSION['logid']; ?></h2>
<nav class="navbar">
  <a href="home.php">Home</a>
  <a href="about.php">about</a>
  <a href="package.php">package</a>
  <a href="book.php">book</a>
  <a href="user_log.php">login</a>
  <a href="ad_log.php">admin</a>
</nav>
<script>
  let menu = document.querySelector('#menu-btn');
  let navbar = document.querySelector('.header .navbar');

  menu.onclick = () => {
    menu.classList.toggle('fa-times')
    navbar.classList.toggle('active')
  };

  window.onscroll = () => {
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')
  };
</script>
<div id="menu-btn" class="fas fa-bars"></div>
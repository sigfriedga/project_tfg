<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "form";

    $connect = mysqli_connect($server, $user, $password, $database);

      if(!$connect){
        echo"Error in your connection server";
      }
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>SIWI AGENCY</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2? family = Oswald: wght @ 300; 500; 700 & family = Source + Sans + Pro: wght @ 300; 400; 700 & display = swap "
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/6cf2391fde.js" crossorigin="anonymous"></script>

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <div class="img__nav">
    <img src="img/logo2.png" alt="">
  </div>
  <div class="hamburger">
    <div class="_layer -top"></div>
    <div class="_layer -mid"></div>
    <div class="_layer -bottom"></div>
  </div>
  <nav class="menuppal nav__btn nav__mb">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="team.html">Team</a></li>
      <li><a href="#" class="btn__orange">Contact</a></li>
    </ul>
  </nav>
  <!--nav__btn-->
  <header class="header__area">
    <div class="header__text">
      <h1>Custom Software and SEO Development</h1>
      <p>From concept to code and design to deployment, we develop reliable and easy-to-use customized software
        products.</p>
      <div class="header__btn">
        <a class="btn__orange" href="http://">Start Now</a>
      </div>
      <!--header__btn-->
    </div>
    <!--header__text-->
    <div class="header__img">
      <img src="img/Team work-bro.svg" alt="">
    </div>

  </header>

  <section class="team">
    <div class="team__area slide-track">
      <h2>Our Expert Team Members</h2>
      <p>This new-found knowledge may then be used by engineers to create new tools and machines</p>
      <div class="team__boxes">
        <div class="team__box slide">
          <div class="team__img">
            <img src="img/sga.jpg" alt="">
            <div class="team__text">
              <h3>Sigfried</h3>
              <p>Web Developer</p>
              <div class="team__icons">
                <a href="https://github.com/sigfriedga"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/sigfriedga/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com/sigfriedga"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/sigfriedga"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--box-->

        <div class="team__box slide">
          <div class="team__img">
            <img src="img/igp.jpeg" alt="">
            <div class="team__text">
              <h3>Inma</h3>
              <p>SEO Manager</p>
              <div class="team__icons">
                <a href="https://www.instagram.com/inmagall/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/inma-gallego-seo/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com/inma.gallego.73"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/gallego_inma"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--box-->
      </div>
      <!--boxes-->
    </div>
  </section>

  <section class="form__area">
    <h2>Contact</h2>
    <p>
      Please contact us if you have questions or comments about this service.</p>
    <form action="action_page.php" name="form" method="POST">
      <label for="name">First name</label>
      <input type="text" id="name" name="name" placeholder="Name...">
      <label for="suname">Surname</label>
      <input type="text" id="surname" name="surname" placeholder="Surname..">
      <label for="mail">Mail</label>
      <input type="email" id="email" name="email" placeholder="ejemplo@email.com">
      <input class="btn__orange" type="button" name="checkin" value="send">
    </form>

  </section>

  <footer class="footer__area">
    <div class="footer__social">
      <p>Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate business throug
        revolutionary.</p>
      <div class="footer_icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-github"></i>
      </div>
    </div>
    <!--footer__social-->
    <div class="footer__company">
      <h3 class="footer__h3">Our Company</h3>
      <div class="footer_list">
        <ul>
          <li><span>About Us</span></li>
          <li><span>Our Service</span></li>
          <li><span>Our Plan</span></li>
          <li><span>Our Team</span></li>
          <li><span>Latest News</span></li>
        </ul>
      </div>
    </div>
    <!--footer__company-->

    <div class="footer__services">
      <h3 class="footer__h3">Our Services</h3>
      <div class="footer_list">
        <ul>
          <li><span>Digital Marketing</span></li>
          <li><span>Seo Optimization</span></li>
          <li><span>Web Development</span></li>
          <li><span>Llink Building</span></li>
          <li><span>Team &amp; Privacy</span></li>
        </ul>
      </div>
    </div>
    <!--footer__services-->

    <div class="footer__contact">
      <h3 class="footer__h3">Contact Us</h3>
      <div class="footer_list">
        <ul>
          <li><span>Email:</span><a href="mailto:info@zzigi.es">info@zzigi.es</a></li>
          <li><span>Web:</span><a href="http://www.zzigi.es">zzigi.es</a></li>
          <li><span>Location:</span>Spain</li>
        </ul>
      </div>
    </div>
    <!--footer__contact-->
  </footer>
  <!--footer-->
  <div class="copy">
    <p>&copy <span>Siwi</span> <?php date() ?>All Rights Reserved.</p>
  </div>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
<?php
if(isset($_POST['checkin'])){
  $id = $_POST["id"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];

  $insertData = "INSERT INTO datos VALUES(
    '$id',
    '$name',
    '$surname', 
    '$email')";

    $runInsert = mysqli_query($connect, $insertData);

    if(!$runInsert){
      echo " Error in SQL query";
    }
}

?>
<?php include("includes/header/header.php"); ?>
<?php include("includes/bd/bd.php"); ?>

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
      <input class="btn__orange" type="submit" name="checkin" value="send">
    </form>

  </section>

  <?php include("includes/footer/footer.php"); ?>
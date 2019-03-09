<!DOCTYPE html>
<html>
  <head>
    <?php require 'languages/languages.php';?>
    <title>CityHack 2019</title>
    <meta charset="utf-8">

    <!-- mobile specific metas ================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/fancybox.min.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/variables.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/banner.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/timeline.css" />
    <link rel="stylesheet" href="css/inspiration.css" />
    <link rel="stylesheet" href="css/ideation.css" />
    <link rel="stylesheet" href="css/implementation.css" />
    <link rel="stylesheet" href="css/partners.css" />
    <link rel="stylesheet" href="css/prizes.css" />
    <link rel="stylesheet" href="css/eventosAnteriores.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="shortcut icon" type="image/png" href="./favicon.ico"/>

    <!-- JavaScript =========================================== -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/fittext.js"></script>

    <script src="js/main.js"></script>
    <!-- Livereload =========================================== -->

  </head>
  <body>
    <navbar id="navbar">
      <div class="navbar_wrapper clearfix">
        <div class="nav_logo" >
          <a href="#banner" data-aos="fade-up" data-aos-delay="100"><img id="navbar_logo" src="./images/logo-cityhack-branco.png" alt="Navbar Logo"/></a>
        </div>
        <ul class="menu" data-aos="fade-left">
          <li><a href="#about"><?=$title['edition19'] ?> <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="#inspiration"><?= $title['Inspiration'] ?></li>
              <li><a href="#ideation"><?= $title['Ideation'] ?></li>
              <li><a href="#timeline"><?= $title['Hackathon'] ?></a></li>
              <li><a href="#implementation"><?= $title['Implementation'] ?></a></li>
            </ul>
          </li>
          <li><?= $title['inscriptions'] ?> <i class="fas fa-angle-down"></i>
            <ul class="sub_menu">
              <li><a data-fancybox data-src="#regulamento"><?= $title['Regulamento'] ?></a></li>
              <li><a class="google_form" data-fancybox data-type="iframe" data-src="https://docs.google.com/forms/d/e/1FAIpQLSdcQE95DhFWOmcUgnhYGfuephSDFWeNy7tuE6SPoApvXQxRLg/viewform?usp=sf_link"><?=$title['inscriptions']?></a></li>
              <li><a href="#prizes"><?= $title['Prémios']?></a></li>
              <li><a href="#video"><?= $title['Teaser']?></a></li>
            </ul>
          </li>
          <!-- <li><a href="#about">Sobre nós</a></li> -->

          <li><a href="#eventosAnteriores"><?= $title['oldEdition']?></a></li>
          <li>
            <form method="post">
              <button type="submit" name="changeLanguage"  style=" border:none!important;background:transparent!important;    color: #000;font-weight: 500!important;cursor: pointer!important;"value="
            <?=$title['otherLanguage-val']?>">
            <?=$title['otherLanguage']?></button >              
            </form>
          </li>
        </ul>

        <a class="menu_toggle" data-aos="fade-left">
          <span class="label"><?= $title['menu']?></span>
          <span class="hamburguer"></span>
        </a>
      </div>
    </navbar>

    <!-- Regulamento -->
    <div id="regulamento">
      <div class="title_container clearfix">
        <h1 class="title"><?= $title['titleRegulament']?></h1>
        <!--<h3 class="subtitle">Versão em Português</h3>-->
      </div>

      <div class="capitulo">
        <h3><?=$title['rule1']?></h3>
        <p>
          <b>a)</b> <?= $content['rule1']?>
        </p>
      </div>

      <div class="capitulo">
        <h3><?=$title['rule2']?></h3>
        <p>
          <b>a)</b> <?= $content['rule2']?>
        </p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule3']?></h3>
        <p>
          <b>a)</b> <?= $content['rule3a']?>
        </p>
        <p>
          <b>b)</b>  <?= $content['rule3b']?></p>
        <p>
          <b>c)</b>  <?= $content['rule3c']?></p>
        <p>
          <b>d)</b>  <?= $content['rule3d']?></p>
        <p>
          <b>e)</b>  <?= $content['rule3e']?></p>
        <p>
          <b>f)</b>  <?= $content['rule3f']?></p>
        <p>
          <b>g)</b>  <?= $content['rule3g']?></p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule4']?></h3>
        <p>
          <b>a)</b> <?= $content['rule4a']?></p>
        <p>
          <b>b)</b> <?= $content['rule4b']?></p>
        <p>
          <b>c)</b> <?= $content['rule4c']?></p>
        <p>
          <b>d)</b> <?= $content['rule4d']?></p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule5']?></h3>
        <p>
          <b>a)</b> <?= $content['rule5a']?></p>
        <p>
          <b>b)</b> <?= $content['rule5b']?></p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule6']?></h3>
        <p>
          <b>a)</b> <?= $content['rule6a']?>
        </p>
          <p class="inner">
            <?= $content['rule6a1st']?>
          </p>
          <p class="inner">
          <?= $content['rule6a2nd']?>
          </p>
          <p class="inner">
          <?= $content['rule6a1rt']?>
          </p>
        <p>
          <b>b)</b> <?= $content['rule6b']?></p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule7']?></h3>
        <p>
          <b>a)</b> <?= $content['rule7a']?></p>
        <p>
          <b>b)</b>  <?= $content['rule7b']?> </p>
        <p>
          <b>c)</b>  <?= $content['rule7c']?></p>
        <p>
          <b>d)</b>  <?= $content['rule7d']?> </p>
        <p>
          <b>e)</b>  <?= $content['rule7e']?> </p>
          <p class="inner">
            <i><b>1.</b> <u><?=$title['rule7e1']?></u> - <?=$content['rule7e1']?></i>
          </p>
          <p class="inner">
            <i><b>2.</b> <u><?=$title['rule7e2']?></u> - <?=$content['rule7e2']?></i>
          </p>
          <p class="inner">
            <i><b>3.</b> <u><?=$title['rule7e3']?></u> - <?=$content['rule7e3']?></i>
          </p>
          <p class="inner">
            <i><b>4.</b> <u><?=$title['rule7e4']?></u> - <?=$content['rule7e4']?></i>
          </p>
          <p class="inner">
            <i><b>5.</b> <u><?=$title['rule7e5']?></u> - <?=$content['rule7e5']?></i>
          </p>
          <p class="inner">
            <i><b>6.</b> <u><?=$title['rule7e6']?></u> - <?=$content['rule7e6']?></i>
          </p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule8']?></h3>
        <p>
          <b>a)</b> <?= $content['rule8']?>  </p>
          <p class="inner">
            <b>1.</b> <?= $content['rule8-1']?>  </p>
          <p class="inner">
            <b>2.</b>  <?= $content['rule8-2']?></p>
          <p class="inner">
            <b>3.</b>  <?= $content['rule8-3']?></p>
          <p class="inner">
            <b>4.</b>  <?= $content['rule8-4']?></p>
          <p class="inner">
            <b>5.</b>  <?= $content['rule8-5']?> </p>
          <p class="inner">
            <b>6.</b>  <?= $content['rule8-6']?></p>
          <p class="inner">
            <b>7.</b>  <?= $content['rule8-7']?></p>
          <p class="inner">
            <b>8.</b>  <?= $content['rule8-8']?></p>
          <p class="inner">
            <b>9.</b>  <?= $content['rule8-9']?></p>
      </div>

      <div class="capitulo">
        <h3><?=$title['rule9'] ?></h3>
        <p>
          <b>a)</b> <?=$content['rule9'] ?></p>
      </div>

      <div class="capitulo">
        <h3><?= $title['rule10']?></h3>
        <p>
          <b>a)</b> <?= $content['rule10a']?>        </p>
        <p>
          <b>b)</b> <?= $content['rule10b']?> 
            <a href="https://www.facebook.com/WeAreCityHack/" target="_blank">https://www.facebook.com/WeAreCityHack/</a>
        </p>
      </div>

    </div>

    <!-- <div id="info_alert">
      <label>Faltam</label>
      <div class="timer">
        <div class="box">
          <span class="cityhackDaysLeft number"></span>
          <span class="label">d</span>
        </div>
        <div class="box">
          <span class="cityhackHoursLeft number"></span>
          <span class="label">h</span>
        </div>
        <div class="box">
          <span class="cityhackMinutesLeft number"></span>
          <span class="label">m</span>
        </div>
        <div class="box">
          <span class="cityhackSecondsLeft number"></span>
          <span class="label">s</span>
        </div>
      </div>
      <p class="resto">para as inscrições terminarem!</p>
      <p class="inscricao">Inscreve-te <a data-fancybox data-type="iframe" data-src="https://docs.google.com/forms/d/e/1FAIpQLSdcQE95DhFWOmcUgnhYGfuephSDFWeNy7tuE6SPoApvXQxRLg/viewform?usp=sf_link">aqui!</a></p>
    </div> -->

    <!-- Banner -->
    <section id="banner">
      <div id="particles-js"></div>
      <div class="countdown" data-aos="fade-right" data-aos-delay="300">
        <a class="link_to_google_form" data-fancybox data-type="iframe" data-src="https://docs.google.com/forms/d/e/1FAIpQLSdcQE95DhFWOmcUgnhYGfuephSDFWeNy7tuE6SPoApvXQxRLg/viewform?usp=sf_link">

        <div class="description">
          <span class="title"><?=$title['openInscriptions']?> <i class="fas fa-arrow-alt-circle-right"></i></span>
        </div>
        <small class="dataLimite"><?= $title['limitDate']?></small>
        <div class="timer">
          <div class="box">
            <span class="cityhackDaysLeft number"></span>
            <span class="label">d</span>
          </div>
          <div class="box">
            <span class="cityhackHoursLeft number"></span>
            <span class="label">h</span>
          </div>
          <div class="box">
            <span class="cityhackMinutesLeft number"></span>
            <span class="label">m</span>
          </div>
          <div class="box">
            <span class="cityhackSecondsLeft number"></span>
            <span class="label">s</span>
          </div>
        </div>
        </a>
      </div>
      <div class="grafismo" data-aos="fade-up" data-aos-delay="200">
        <img class="logo_cityhack" src="./images/grafismo-topo-site-cityhack.png" alt="Grafismo CityHack" />
      </div>

      <div class="apoio">
        <h1><?= $title['mainSupport']?></h1>
        <img class="logo_Gulbenkian" src="./images/logoFundaçãoCG-branco.png" alt="Fundação Calouste Gulbenkian" />
      </div>
      <div class="WeAreCityHack">
        <label>#WeAreCityHack</label>
        <div class="redesSociais">
          <a href="https://www.facebook.com/WeAreCityHack" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/WeAreCityHack/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/WeAreCityHack/" target="_blank"><i class="fab fa-twitter-square"></i></a>
        </div>
      </div>
    </section>

    <!-- Informação sobre o evento -->
    <section id="about">
      <div class="wrapper">
        <h1 class="title" data-aos="fade-up">CityHack 2019</h1>
        <span class="localization" data-aos="fade-up"><?= $title['cityhackLocal']?></span>
        <div class="container clearfix">
          <div class="subtitle" data-aos="fade-up">
            <p>
              <i><?= $content['intro']?></i>
            </p>
          </div>
          <div class="description_left" data-aos="fade-right">
            <p><?= $content['description-1']?></p>

            <p><?= $content['description-2']?></p>
          </div>
          <div class="description_right" data-aos="fade-left">
            <p><?= $content['description-3']?></p>
            <p><?= $content['description-4']?></p>

            <p><?= $content['description-5']?></p>
          </div>
        </div>
        <small><?= $content['trademark']?></small>

      </div>
    </section>

    <!-- Prémios -->
    <section id="prizes">
      <div class="wrapper">
        <h1 class="title" data-aos="fade-up">Prémios</h1>
        <div class="awards">
          <div class="awards_container left">
            <div class="secondPlace" data-aos="zoom-in" data-aos-delay="200">
              <img src="./images/segundoLugar.png" alt="Second Place" />
              <span class="price_money fit"><?= $money['nd']?></span>
              <span class="label"><?= $title['secondPlace']?></span>
            </div>
          </div>
          <div class="awards_container">
            <div class="firstPlace" data-aos="zoom-in">
              <img src="./images/primeiroLugar.png" alt="First Place" />
              <span class="price_money fit"><?= $money['st']?></span>
              <span class="label"><?= $title['firstPlace']?></span>
            </div>
          </div>
          <div class="awards_container right">
            <div class="thirdPlace" data-aos="zoom-in" data-aos-delay="400">
              <img src="./images/terceiroLugar.png" alt="Third Place" />
              <span class="price_money fit"><?= $money['rd']?></span>
              <span class="label"><?= $title['lastPlace']?></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Teaser do evento  -->
    <section id="video">
      <h1><?= $title['watchTeaser']?></h1>
      <i class="fas fa-play-circle"></i>
      <!-- <a data-fancybox href="https://youtu.be/HIEpWyjcOsE"></a> -->
      <a data-fancybox href="CityHack-Teaser-2019.mp4"></a>
    </section>

    <!-- Desafios -->
    <section id="inspiration">
      <span class="background_title"><?= $title['Inspiration']?></span>
      <div class="wrapper">
        <h1 data-aos="fade-up"><?= $title['Inspiration']?></h1>
        <div class="container">
          <div class="box" data-aos="fade-right">
            <span class="number">1</span>
            <div id="content1" class="content" onclick="toggleChallenge('content1')">
              <span class="label"><?= $title['challenge1']?></span>
              <div class="sub_content">
                <span class="sub_label"><?= $subtitle['challenge1-1']?></span>
                <p><?= $content['subtitle-1-1']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-2']?></span>
                <p><?= $content['subtitle-1-2']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-3']?></span>
                <p><?= $content['subtitle-1-3']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-4']?></span>
                <p><?= $content['subtitle-1-4']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-5']?></span>
                <p><?= $content['subtitle-1-5']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-6']?></span>
                <p><?= $content['subtitle-1-6']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-7']?></span>
                <p><?= $content['subtitle-1-7']?></p>
                <span class="sub_label"><?= $subtitle['challenge1-8']?></span>
                <p><?= $content['subtitle-1-8']?></p>
              </div>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
          <div class="box" data-aos="fade-left">
            <span class="number">2</span>
            <div id="content2" class="content" onclick="toggleChallenge('content2')">
              <span class="label"><?= $title['challenge2']?> </span>
              <div class="sub_content">
                <span class="sub_label"><?= $subtitle['challenge2-1']?></span>
                <p><?= $content['subtitle-2-1']?></p>
                <span class="sub_label"><?= $subtitle['challenge2-2']?></span>
                <p><?= $content['subtitle-2-2']?></p>
              </div>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
          <div class="box" data-aos="fade-right">
            <span class="number">3</span>
            <div id="content3" class="content" onclick="toggleChallenge('content3')">
              <span class="label"><?= $title['challenge3']?></span>
              <div class="sub_content">
                <span class="sub_label"><?=$subtitle['challenge3-1'] ?></span>
                <p><?=$content['subtitle-3-1'] ?></p>
                <span class="sub_label"><?=$subtitle['challenge3-2'] ?></span>
                <p><?=$content['subtitle-3-2'] ?></p>
                <span class="sub_label"><?=$subtitle['challenge3-3'] ?></span>
                <p><?=$content['subtitle-3-3'] ?></p>
                <span class="sub_label"><?=$subtitle['challenge3-4'] ?></span>
                <p><?=$content['subtitle-3-4'] ?></p>
              </div>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
          <div class="box" data-aos="fade-left">
            <span class="number">4</span>
            <div id="content4" class="content" onclick="toggleChallenge('content4')">
              <span class="label"><?= $title['challenge4']?></span>
              <div class="sub_content">
                <span class="sub_label"><?= $subtitle['challenge4-1'] ?></span>
                <p><?= $content['subtitle-4-1']?></p>
                <span class="sub_label"><?= $subtitle['challenge4-2'] ?></span>
                <p><?= $content['subtitle-4-2']?></p>
                <span class="sub_label"><?= $subtitle['challenge4-3'] ?></span>
                <p><?= $content['subtitle-4-3']?></p>
                <span class="sub_label"><?= $subtitle['challenge4-4'] ?></span>
                <p><?= $content['subtitle-4-4']?></p>
              </div>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
          <div class="box" data-aos="fade-right">
            <span class="number">5</span>
            <div id="content5" class="content" onclick="toggleChallenge('content5')">
              <span class="label"><?= $title['challenge5']?></span>
              <div class="sub_content">
                <span class="sub_label"><?= $subtitle['challenge5-1']?></span>
                <p><?= $content['subtitle-5-1']?></p>
                <span class="sub_label"><?= $subtitle['challenge5-2']?></span>
                <p><?= $content['subtitle-5-2']?></p>
              </div>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
          <div class="box" data-aos="fade-left">
            <span class="number">6</span>
            <div id="content6" class="content" onclick="toggleChallenge('content6')">
              <span class="label"><?= $title['challenge6']?></span>
              <div class="sub_content">
                <span class="sub_label"><?= $subtitle['challenge6-1']?></span>
                <p><?= $content['subtitle-6-1']?></p>
                <span class="sub_label"><?= $subtitle['challenge6-2']?></span>
                <p><?= $content['subtitle-6-2']?></p>
                <span class="sub_label"><?= $subtitle['challenge6-3']?></span>
                <p><?= $content['subtitle-6-3']?></p>
              </div>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
          <div class="box" data-aos="fade-right">
            <span class="number">7</span>
            <div class="content">
              <span class="label"><?= $title['challenge7']?></span>
              <button class="arrow_button"><i class="fas fa-angle-down"></i></button>
            </div>
          </div>
        </div>
      </div>
      <h1 data-aos="fade-up"><?= $title['mentors']?></h1>
      <h2 data-aos="fade-up" style="text-align:center"><?= $title['soon']?></h2>
      <!-- <div class="mentores"> -->
        <!-- Mentor 1 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 2 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 3 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 4 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 5 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 6 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 7 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 8 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 9 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 10 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
        <!-- Mentor 11 -->
        <!-- <div class="mentor">
            <div class="flipper">
              <div class="flipper_inner">
                <div class="front">
                  <img src="./images/Unknown.jpg" alt="Imagem Mentor" />
                </div>
                <div class="back">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          <span class="mentor_name">John Doe</span>
          <small class="mentor_description">Professor do IPT</small>
        </div> -->
      <!-- </div> -->
    </section>

    <!-- Inspiração -->
    <section id="ideation">
      <span class="background_title"><?= $title['Ideation']?></span>
      <div class="wrapper">
        <h1 data-aos="fade-up"><?= $title['Ideation']?></h1>
        <span class="localization" data-aos="fade-up"><?= $title['dateideation']?></span>
        <div class="content">
          <div class="left_column" data-aos="fade-right">
            <p class="introducao"><?= $content['introIdeation']?></p>
            <br />
            <br />
            <p class="title"><?= $title['modelIdeation']?></p>
            <br />
            <p><?= $content['model-1']?></p>
            <p><?= $content['model-2']?></p>
            <br />
            <br />
            <p class="title"><?= $title['agenda']?></p>
            <br />
            <p class="subtitle"><?= $subtitle['agenda-1']?></p>
            <p><?= $content['agenda-1']?></p>
            <br />
            <p class="subtitle"><?=$subtitle['agenda-2'] ?></p>
            <p><?=$content['agenda-2-1'] ?></p>
            <p><?=$content['agenda-2-2'] ?></p>
            <br />
            <p class="subtitle"><?= $subtitle['agenda-3']?></p>
            <p><?= $content['agenda-3-1']?></p>
            <p><?= $content['agenda-3-2']?></p>
          </div>
          <div class="right_column" data-aos="fade-left">
            <p class="subtitle"><?= $subtitle['agenda-4']?></p>
            <p><?= $content['agenda-4']?></p>
            <br />
            <p class="subtitle"><?= $subtitle['agenda-5']?></p>
            <br />
            <p class="subtitle"><?= $subtitle['agenda-6']?></p>
            <p><?= $content['agenda-6']?></p>
            <br />
            <p class="subtitle"><?= $subtitle['agenda-7']?></p>
            <p><?= $content['agenda-7']?></p>
            <br />
            <p><b>1)</b> <?= $content['agend-7-1']?> </p>
            <p><b>2)</b> <?= $content['agend-7-2']?></p>
            <br />
            <p class="subtitle"><?= $subtitle['agenda-8']?></p>
            <p><?= $content['agenda-8']?></p>
            <div class="image">
              <img src="./images/lilianaCastro.png" alt="Liliana Castro"/>
              <div class="imageInformation">
                <span class="name"><?= $person['LilianaCastro'] ?></span>
                <small class="subtitle"><?= $person['LilianaCastro-info']?></small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Hackathon / Cronologia do evento -->
    <section id="timeline">
      <div class="wrapper">
        <h1 class="timeline_title" data-aos="fade-up"><?= $title['timelineTitle']?> </h1>
        <p class="subtitle" data-aos="fade-up"><?= $content['timeline-warming']?></p>
        <div class="buttons">
          <button id="timelineDay1Button" class="day1 selected" data-aos="fade-right"><?= $title['st-day']?></button>
          <button id="timelineDay2Button" class="day2" data-aos="fade-left"><?= $title['nd-day']?></button>
        </div>
        <div class="timeline" data-aos="fade-up">
          <ul id="timelineDay1" class="clearfix">
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/img-generica.png" alt="Logo City Hack">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['1-hour']?></span>
                  <h4><?= $timeline['1-title']?></h4>
                  <small><?= $timeline['1-descr']?></small>
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/apres-mentores-w.png" alt="Tomar">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['2-hour']?></span>
                  <h4><?= $timeline['2-title'] ?></h4>
                  <small><?= $timeline['2-descr']?></small>
                </div>
                <div class="arrow"></div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/almoço1_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['3-hour']?></span>
                  <h4><?= $timeline['3-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/gulbenkian_ljeronimo_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?=$timeline['4-hour']?></span>
                  <h4><?=$timeline['4-title']?></h4>
                  <small><?=$timeline['4-descr']?></small>
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/inicio-hackthon.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['5-hour']?></span>
                  <h4><?= $timeline['5-title']?></h4>
                  <small><?= $timeline['5-descr']?></small>
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/lanche_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['6-hour']?></span>
                  <h4><?= $timeline['6-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/jantar-w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['7-hour']?></span>
                  <h4><?= $timeline['7-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/imagem-rita-nogueira-w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?=  $timeline['8-hour'] ?></span>
                  <h4><?=  $timeline['8-title'] ?></h4>
                  <small><?=  $timeline['8-descr'] ?></small>
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/programming.jpg" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['9-hour']?></span>
                  <h4><?= $timeline['9-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
          </ul>
          <ul id="timelineDay2" class="clearfix">
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/logo-city-hack2019.png" alt="Logo City Hack">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['10-hour']?></span>
                  <h4><?= $timeline['10-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/pitches-w.png" alt="Tomar">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['11-hour']?></span>
                  <h4><?= $timeline['11-title']?></h4>
                  <small><?= $timeline['11-descr'] ?></small>
                </div>
                <div class="arrow"></div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/almoço2_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['12-hour']?></span>
                  <h4><?=$timeline['12-title'] ?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/fim-hackathon_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['13-hour']?></span>
                  <h4><?= $timeline['13-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/programming.jpg" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['14-hour']?></span>
                  <h4><?= $timeline['14-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/juri_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['15-hour']?></span>
                  <h4><?= $timeline['15-title']?></h4>
                  <small><?= $timeline['15-descr']?></small>
                </div>
                <div class="arrow"></div>
              </div>
            </li>
            <li>
              <div class="content clearfix">
                <div class="image">
                  <img src="./images/cronologia/fim-evento_w.png" alt="Início Hackathon">
                </div>
                <div class="content_info">
                  <span class="hora"><?= $timeline['16-hour']?></span>
                  <h4><?= $timeline['16-title']?></h4>
                  <!-- <small>Informação extra...</small> -->
                </div>
                <div class="arrow"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Implementation -->
    <section id="implementation">
      <h1 class="background_title" data-aos="fade-up"><?= $title['Implementation'] ?></h1>
      <h2 data-aos="fade-up"><?= $title['soon'] ?></h2>
    </section>

    <!-- Evento anteriores -->
    <section id="eventosAnteriores" class="clearfix">
      <!-- <h1 class="title">Edições Anteriores</h1> -->
      <div class="edition2018">
        <div class="box1">
          <h1 class="previousEditionsTitle"><?= $title['edition18']?></h1>
          <div class="buttons">
            <!-- <button class="2018gallery"><?= $title['seePictures']?></button> -->
            <button class="2018teaser"><?= $title['seeVideo']?></button>
          </div>
        </div>
        <div class="box2">
          <h1 class="previousEditionsTitle">Edição 2018</h1>
          <div class="info_container" data-aos="fade-left">
            <div class="info_box">
              <span class="info_number">20</span>
              <span class="info_label"><?= $title['teams']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">80</span>
              <span class="info_label"><?= $title['part']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">11</span>
              <span class="info_label"><?= $title['schools']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">10</span>
              <span class="info_label"><?= $title['areas']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">25%</span>
              <span class="info_label"><?= $title['female']?></span>
            </div>
          </div>
          <div class="buttons">
            <!-- <button class="2018gallery"><?= $title['seePictures']?></button> -->
            <button class="2018teaser"><?= $title['seeVideo']?></button>
          </div>
        </div>
      </div>

      <div class="edition2017">
        <div class="box1">
          <h1 class="previousEditionsTitle">Edição 2017</h1>
          <div class="buttons">
            <!-- <button class="2017gallery"><?= $title['seePictures']?></button> -->
            <button class="2017teaser"><?= $title['seeVideo']?></button>
          </div>
        </div>
        <div class="box2">
          <h1 class="previousEditionsTitle">Edição 2017</h1>
          <div class="info_container" data-aos="fade-right">
            <div class="info_box">
              <span class="info_number">16</span>
              <span class="info_label"><?= $title['teams']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">70</span>
              <span class="info_label"><?= $title['part']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">10</span>
              <span class="info_label"><?= $title['schools']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">6</span>
              <span class="info_label"><?= $title['areas']?></span>
            </div>
            <div class="info_box">
              <span class="info_number">10%</span>
              <span class="info_label"><?= $title['female']?></span>
            </div>
          </div>
          <div class="buttons">
            <!-- <button class="2017gallery"><?= $title['seePictures']?></button> -->
            <button class="2017teaser"><?= $title['seeVideo']?></button>
          </div>
        </div>

      </div>
    </section>

    <!-- Parceiros -->
    <section id="partners">
      <div class="wrapper">
        <h1 class="title">
          <?= $title['Apoio']?>
        </h1>
        <div class="apoio">
          <img src="./images/logoFundaçãoCG.png" alt="Fundação Calouste Gulbenkian"/>
          <img src="./images/hack-for-good.png" alt="Hack For Good"/>
        </div>
        <h1 class="title">
          <?= $title['Parceiros']?>
        </h1>
        <div class="parcerias">
          <img class="softinsa" src="./images/logotipo_softinsa.png" alt="Softinsa"/>
          <img src="./images/logo_CriticalSoftware_HorizontalVersion.png" alt="Critical Software"/>
          <img src="./images/compta.png" alt="Compta"/>
          <img src="./images/logonext_.png" alt="Next Solution"/>
        </div>
        <h1 class="title">
          <?= $title['Organização']?>
        </h1>
        <div class="parcerias">
          <img src="./images/logo-ipt.png" alt="IPT"/>
          <img src="./images/logo_CMTomar_2015.png" alt="CM Tomar"/>
        </div>
        <!-- <h1 class="title">
          Parcerias
        </h1> -->
        <!-- <div class="parcerias">

          <img src="./images/criticalSoftware.png" alt="Critical Software" />
          <img src="./images/cmtomar.jpg" alt="CM Tomar" />
        </div> -->
      </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    if ($_SERVER['REQUEST_URI'] == "/" || str_starts_with($_SERVER['REQUEST_URI'], '/category/')) {
      echo '<meta name="description" content="Akatron Yazılım. Cloud Saas projeleri ile veri analizi başta olmak üzere bir çok sektörde uygulamalar geliştirmekteyiz." />';
      echo '<meta name="contact" content="info@akatron.net" />';
      echo '<meta name="keywords" content="akatron, network, net, debi, cankaya, konak, izmir, turkiye, yazılım geliştirme, saas, cloud" />';
    }
  ?>
  
  <title><?php wp_title(''); ?></title>
  <link rel="icon" type="<?php echo get_template_directory_uri().'/assets/'; ?>image/x-icon" href="img/ico.ico" />
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/navbar.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/stage.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/content.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/pricing.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/features.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/free-trial.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/supported-platforms.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/sectoral.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/window.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/'; ?>css/wiki.css" />
  <?php wp_head(); ?>
</head>

<body>

    <!-- -- LOADING SCREEN -- -->
    <div id="theme-loader"></div>

    <!-- -- ON SCROLL NAVBAR -- -->
    <nav
      id="nav-stick"
      class="navbar navbar-expand-lg d-none d-lg-block sticky-top"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="/"
          ><img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-icon.png" style="height: 30px"
        /></a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/uygulamayi-indir/">Uygulamayı İndir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/fiyatlandirma/">Fiyatlandırma</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/docs/debi-turkce/baslangic/">Bilgi Merkezi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://akatron.net/">Kurumsal</a>
            </li>
          </ul>
        </div>
        <form class="d-flex">
          <a href="http://debi-app.akatron.net/giris" class="btn btn-login btn-login-active" type="submit">
            <i class="fa-solid fa-user-tie"></i>
            <span>&nbsp; Giriş Yap</span>
          </a>
        </form>
      </div>
    </nav>

    <!-- -- ON STAGE NAVBAR -- -->
    <nav id="nav" class="navbar navbar-expand-lg">
      <a class="navbar-brand d-lg-none" href="/"
        ><img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-icon.png" style="height: 40px"
      /></a>
      
      <button id="theme-btn-mini" type="button" onclick="themechange()" class="btn d-lg-none btn-mini-theme">
        <i class="fa-solid fa-sun"></i>
      </button>
      <button
        class="navbar-toggler"
        onclick="$('.navbar-collapse').collapse('toggle'); document.getElementById('nav').classList.toggle('nav-collapse-bg')"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style="box-shadow: none;"
      >
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item d-lg-none" style="background: transparent">
            <a href="http://debi-app.akatron.net/giris" class="nav-link" href="#"
              ><i class="fa-solid fa-right-to-bracket"></i> &nbsp; Giriş Yap</a
            >
          </li>

          <li class="nav-item" style="background: transparent">
            <a class="nav-link" href="/uygulamayi-indir/">Uygulamayı İndir</a>
          </li>

          <li class="nav-item" style="background: transparent">
            <a class="nav-link" href="/fiyatlandirma/">Fiyatlandırma</a>
          </li>

          <a class="d-none d-lg-block navbar-mid-brand" href="/">
            <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-icon.png" />
            <div class="navbar-mid-heading">
              Designable Business Intelligence
            </div>
          </a>

          <li class="nav-item dropable">
            <a class="nav-link">Bilgi Merkezi</a>
            <div class="nav-dropdown">
              <div class="list-group">
                <a href="/docs/debi-turkce/baslangic/" class="list-group-item list-group-item-action"
                  >Kullanmaya Başlayın</a
                >
                <a href="/nerede-kullanilir/" class="list-group-item list-group-item-action"
                  >Nerede Kullanılır</a
                >
                <a href="/docs/debi-turkce" class="list-group-item list-group-item-action"
                  >Dökümanlar</a
                >
                <a href="https://www.akatron.net/category/academy/" class="list-group-item list-group-item-action"
                  >Akatron Akademi</a
                >
              </div>
            </div>
          </li>

          <li class="nav-item dropable">
            <a class="nav-link">Kurumsal</a>
            <div class="nav-dropdown">
              <div class="list-group">
                <a href="https://akatron.net/" class="list-group-item list-group-item-action"
                  >Akatron Network</a
                >
                <a href="https://akatron.net/kurumsal/" class="list-group-item list-group-item-action"
                  >Kurumsal</a
                >
                <a href="https://akatron.net/iletisim/" class="list-group-item list-group-item-action"
                  >İletişim</a
                >
              </div>
            </div>
          </li>
        </ul>

        <btn
          id="theme-btn"
          onclick="themechange()"
          type="button"
          class="btn btn-theme d-none d-lg-block"
        >
          <i class="fa-solid fa-sun"></i>
          <span>&nbsp; Açık Tema</span>
      </btn>

        <a
          href="http://debi-app.akatron.net/giris"
          type="button"
          class="btn btn-login btn-login-active d-none d-lg-block"
        >
          <i class="fa-solid fa-user-tie"></i>
          <span>&nbsp; Giriş Yap</span>
        </a>
      </div>
    </nav>
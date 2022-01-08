<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/index.js"></script>
    <title>Kento Tsuchida</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="header-sp">
        <div class="header-logo">
          <a class="header-logo--a" href="index.html">Kento Tsuchida</a>
        </div>
        <nav class="hamburger-menu">
          <div class="hamburger-icon">
            <div class="hamburger-logo">MENU</div>
            <div class="hamburger-line">
              <span class="bar-top"></span>
              <span class="bar-bottom"></span>
            </div>
          </div>
          <div class="active-page">
            <div class="page-menu">
              <li><a href="/index.php?page_id=16">ABOUT</a></li>
              <li><a href="/index.php?page_id=18">WORKS</a></li>
              <li><a href="/index.php?page_id=20">SKILLS</a></li>
            </div>
            <div class="page-sns">
              <a class="twitter--top" href="https://twitter.com/tsuchiken_777" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter-square fa-3x icon-color"></i>
              </a>
              <a class="instagram--top" href="https://www.instagram.com/thuchiken/" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram fa-3x icon-color"></i>
              </a>
              <a class="mail--top" href="mailto:kentuuuwork@gmail.com">
                <i class="far fa-envelope fa-3x icon-color"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div class="header-pc">
        <div class="header-logo">
          <a class="header-logo--a" href="index.html">Kento Tsuchida</a>
        </div>
        <div class="header-menu">
         <li><a href="/index.php?page_id=16">ABOUT</a></li>
         <li><a href="/index.php?page_id=18">WORKS</a></li>
         <li><a href="/index.php?page_id=20">SKILLS</a></li>
        </div>
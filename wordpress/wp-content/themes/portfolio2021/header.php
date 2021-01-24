<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>AIGV</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=yes">
  <meta name="description" content="index description">
  <meta name="format-detection" content="telephone=no">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

  <!-- font awesome CSS -->
  <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">

  <!-- font CDN -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">

  <!-- slick CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

  <!-- ページ毎に読み込むCSSを変えるための部分 -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/index.css">

  <!-- --------------------------------------- -->

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favcon.png">

  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__container inner">
      <h1 class="header__logo">
        <a href="#">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/AIGV.svg" alt="サイトのロゴ">
        </a>
      </h1>
    
      <nav class="header__nav">
        <ul class="header__navItems">
          <li class="header__navItem">
            <a href="#" class="header__navLink has-child">制作実績</a>
            <ul class="header__globalNav">
              
            </ul>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink has-child">サービス</a>
            <ul class="header__globalNav">
              <li></li>
              <li></li>
              <li></li>
              <div class="red"></div>
            </ul>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">AIGVについて</a>
          </li>
          <li class="header__navItem"><a href="#" class="header__navLink">お知らせ</a></li>
        </ul>
        <a href="#" class="header__contact">お問い合わせ</a>
      </nav>
    </div>

  </header>

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
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- slick CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

  <!-- ページ毎に読み込むCSSを変えるための部分 -->
  <?php if ( is_home() ): ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/index.css">
  <?php endif; ?>
  <?php if ( is_post_type_archive('works') ): ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/archive-works.css">
  <?php endif; ?>
  <?php if ( is_singular('works') ): ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/single-works.css">
  <?php endif; ?>
  <?php if ( is_page('about') ): ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/about.css">
  <?php endif; ?>
  <!-- --------------------------------------- -->

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favcon.png">

  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__container h-inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/AIGV.svg" alt="サイトのロゴ">
        </a>
      </h1>
    
      <nav class="header__nav">
        <ul class="header__navItems">

          <li class="header__navItem">
            <div class="header__navLink has-child">制作実績</div>
            <ul class="header__subItems">
              <?php
                $args = array(
                  'posts_per_page' => 4, // 投稿件数の指定
                  'post_type' => 'works'// post_typeの指定
                );
                $the_query = new WP_Query($args); 
                if($the_query->have_posts()):
              ?>
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <li class="header__subItem">
                <a href="<?php the_permalink(); ?>">
                  <div class="header__subImg">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  </div>
                  <p class="header__subCnt"><?php the_title(); ?></p>
                </a>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
        
              <?php else: ?>
                <p>表示できる情報はありません。</p>
              <?php endif; ?>
            </ul>
          </li>

          <li class="header__navItem">
            <div class="header__navLink has-child">サービス</div>
            <ul class="header__subItems">
              <?php
                $args = array(
                  'posts_per_page' => 3, // 投稿件数の指定
                  'post_type' => 'works'// post_typeの指定
                );
                $the_query = new WP_Query($args); 
                if($the_query->have_posts()):
              ?>
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <li class="header__subItem">
                <a href="<?php the_permalink(); ?>">
                  <div class="header__subImg">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  </div>
                  <p class="header__subCnt"><?php the_title(); ?></p>
                </a>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
        
              <?php else: ?>
                <p>表示できる情報はありません。</p>
              <?php endif; ?>
            </ul>
          </li>

          <li class="header__navItem">
            <a href="<?php echo esc_url(home_url('about')); ?>" class="header__navLink">AIGVについて</a>
          </li>

          <li class="header__navItem">
            <a href="#" class="header__navLink">お知らせ</a>
          </li>

        </ul>
        <a href="#" class="header__contact">お問い合わせ</a>
      </nav>
      
      <label for="hamburger" class="header__hamburger">
        <span class="header__menuBar"></span>
        <span class="header__menuBar"></span>
        <span class="header__menuBar"></span>
      </label>
    </div>
    <input type="checkbox" name="hamburger" id="hamburger" class="checkbox">
    <div class="header__spMenu">
      <div class="header__spContainer inner">
        <div class="header__spLogo">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/AIGV_white.svg" alt="">
        </div>
        <nav class="header__spNav">
          <ul class="header__spNavitems">
            <li class="header__spNavitem"><a href="<?php echo esc_url(home_url()); ?>" class="header__spLink">ホーム</a></li>
            <li class="header__spNavitem"><a href="<?php echo esc_url(home_url('works')); ?>" class="header__spLink">制作実績</a></li>
            <li class="header__spNavitem"><a href="#" class="header__spLink">サービス一覧</a></li>
            <li class="header__spNavitem"><a href="<?php echo esc_url(home_url('about')); ?>" class="header__spLink">AIGVについて</a></li>
            <li class="header__spNavitem"><a href="#" class="header__spLink">お知らせ</a></li>
            <li class="header__spNavitem"><a href="#" class="header__spLink">サイトマップ</a></li>
            <li class="header__spNavitem"><a href="#" class="header__spLink">プライバシーポリシー</a></li>
          </ul>
        </nav>
        <hr>
        <a href="" class="header__contact header__spContact">お問い合わせ</a>
        <label for="hamburger" class="header__spNavclose">閉じる</label>
      </div>
    </div>

  </header>

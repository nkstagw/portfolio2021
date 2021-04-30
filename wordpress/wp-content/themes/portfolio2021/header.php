<?php
/**
 * Header Component
 *
 * @package WordPress
 */

?>

<!DOCTYPE html>
<html prefix="og:https://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<title> <?php echo esc_html( wp_get_document_title() ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=yes">
	<meta name="description" content="index description">
	<meta name="format-detection" content="telephone=no">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo esc_url( home_url() ); ?>">
	<meta property="og:title" content="AIGV">
	<meta property="og:description" content="AIGVのポートフォリオサイト">
	<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fv_2@2x.png">
	<meta property="og:site_name" content="AIGV">
	<meta property="og:locale" content="ja_JP">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:domain" content="">

	<!-- font CDN -->
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- ファビコン -->
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favcon.png">

	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="header__container h-inner">
			<h1 class="header__logo">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/AIGV.svg" alt="サイトのロゴ">
				</a>
			</h1>

			<nav class="header__nav">
				<ul class="header__navItems">
					<?php
					$http = is_ssl() ? 'https' : 'http' . '://';
					$url  = $http . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					?>
					<?php
					if ( strstr( $url, 'works' ) ) {
						$works_is_page = 'is-page';
					} elseif ( strstr( $url, 'service' ) ) {
						$service_is_page = 'is-page';
					} elseif ( strstr( $url, 'about' ) ) {
						$about_is_page = 'is-page';
					} elseif ( strstr( $url, 'news' ) || strstr( $url, 'category' ) || is_single('')) {
						$news_is_page = 'is-page';
					}
					?>

					<li class="header__navItem">
						<div class="header__navLink has-child <?php echo esc_html( $works_is_page ); ?> ">制作実績</div>
						<ul class="header__subItems">
							<?php
							$args      = array(
								'posts_per_page' => 4, // 投稿件数の指定
								'post_type'      => 'works', // post_typeの指定
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								?>
								<?php
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
							<li class="header__subItem">
								<a href="<?php the_permalink(); ?>">
									<div class="header__subImg">
										<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title(); ?>">
									</div>
									<p class="header__subCnt"><?php the_title(); ?></p>
								</a>
							</li>
							<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>

							<?php else : ?>
							<p>表示できる情報はありません。</p>
							<?php endif; ?>
						</ul>
					</li>

					<li class="header__navItem">
						<div class="header__navLink has-child <?php echo esc_html( $service_is_page ); ?>">サービス</div>
						<ul class="header__subItems">

							<li class="header__subItem">
								<a href="<?php echo esc_url( home_url( 'service/partner' ) ); ?>">
									<div class="header__subImg">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner@2x.png"
											alt="">
									</div>
									<p class="header__subCnt">Web制作　外注パートナー</p>
								</a>
							</li>

							<li class="header__subItem">
								<a href="<?php echo esc_url( home_url( 'service/wordpress' ) ); ?>">
									<div class="header__subImg">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wordpress@2x.png"
											alt="">
									</div>
									<p class="header__subCnt">WordPress実装</p>
								</a>
							</li>

							<li class="header__subItem">
								<a href="<?php echo esc_url( home_url( 'service/web_lp' ) ); ?>">
									<div class="header__subImg">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/web_lp@2x.png"
											alt="">
									</div>
									<p class="header__subCnt">Webサイト・LP制作</p>
								</a>
							</li>

						</ul>
					</li>

					<li class="header__navItem">
						<a href="<?php echo esc_url( home_url( 'about' ) ); ?>"
							class="header__navLink <?php echo esc_html( $about_is_page ); ?>">AIGVについて</a>
					</li>

					<li class="header__navItem">
						<a href="<?php echo esc_url( home_url( 'news' ) ); ?>"
							class="header__navLink <?php echo esc_html( $news_is_page ); ?>">お知らせ</a>
					</li>

				</ul>
				<a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="header__contact">お問い合わせ</a>
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
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/AIGV_white.svg" alt="">
				</div>
				<nav class="header__spNav">
					<ul class="header__spNavitems">
						<li class="header__spNavitem"><a href="<?php echo esc_url( home_url() ); ?>" class="header__spLink">ホーム</a>
						</li>
						<li class="header__spNavitem"><a href="<?php echo esc_url( home_url( 'works' ) ); ?>"
								class="header__spLink">制作実績</a></li>
						<li class="header__spNavitem"><a href="<?php echo esc_url( home_url( 'service' ) ); ?>" class="header__spLink">サービス一覧</a></li>
						<li class="header__spNavitem"><a href="<?php echo esc_url( home_url( 'about' ) ); ?>"
								class="header__spLink">AIGVについて</a></li>
						<li class="header__spNavitem"><a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="header__spLink">お知らせ</a></li>
						<li class="header__spNavitem"><a href="#" class="header__spLink">サイトマップ</a></li>
						<li class="header__spNavitem"><a href="#" class="header__spLink">プライバシーポリシー</a></li>
					</ul>
				</nav>
				<hr>
				<a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="header__contact header__spContact">お問い合わせ</a>
				<label for="hamburger" class="header__spNavclose">閉じる</label>
			</div>
		</div>

		<div class="loader">
			<div class="loader__inner">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
		</div>

	</header>

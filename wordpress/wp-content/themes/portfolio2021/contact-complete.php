<?php
/**
 * Template Name: contact-complete
 *
 * @package WordPress
 */

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title> <?php echo esc_html( wp_get_document_title() ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=yes">
	<meta name="description" content="index description">
	<meta name="format-detection" content="telephone=no">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

	<!-- font CDN -->
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- ファビコン -->
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favcon.png">

	<?php wp_head(); ?>
</head>
<body>
	
	<main class="contact-complete">
		<article>

			<section class="complete content-padding">
				<div class="complete__container content-width">
					<h1 class="complete__logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/AIGV.svg" alt="サイトのロゴ">
						</a>
					</h1>

					<p class="complete__ttl">お問い合わせありがとうございます</p>

					<p class="complete__txt">お問い合わせいただきありがとうございます。2～3営業日以内に、担当よりメールにて返信させていただきます。</p>

					<ul class="complete__cards">
						<li class="complete__card">
							<a href="<?php echo esc_url( home_url() ); ?>" class="complete__link">ホーム</a>
						</li>

						<li class="complete__card">
							<a href="<?php echo esc_url( home_url('about') ); ?>" class="complete__link">AIGVについて</a>
						</li>

						<li class="complete__card">
							<a href="<?php echo esc_url( home_url('service') ); ?>" class="complete__link">サービス</a>
						</li>

						<li class="complete__card">
							<a href="<?php echo esc_url( home_url('works') ); ?>" class="complete__link">制作実績</a>
						</li>

						<li class="complete__card">
							<a href="<?php echo esc_url( home_url('news') ); ?>" class="complete__link">お知らせ</a>
						</li>
					</ul>
				</div>
				
			</section>


		</article>
	</main>

<?php wp_footer(); ?>
</body>

</html>

<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>

<main class="contact">
	<article>
		<section class="kv">
			<div class="kv__img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact_kv.png" alt="">
			</div>
			<div class="kv__filter"></div>
			<div class="kv__box">
				<p class="kv__enTtl">Contact</p>
				<h2 class="kv__ttl">お問い合わせ</h2>
			</div>
		</section>

		<section class="topicPath inner">
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>"
					class="topicPath__link">ホーム</a></span>
			<span class="topicPath__item"><?php the_title(); ?></span>
		</section>

		<section class="form content-padding">
			<div class="content-width">
				<div class="section__head">
					<p class="section__enTtl">Contact</p>
					<h3 class="section__ttl">お問い合わせ</h3>
					<p class="section__txt">
						外注パートナーやサイト制作に関してお気軽にお問い合わせください。
					</p>
				</div>
				<div class="form__tabBox">
					<input type="radio" id="tab__01">
					<label for="tab__01" class="form__tabItem tabItem is-active" data-tab="mail">フォームからのお問い合わせ</label>
					<input type="radio" id="tab__02">
					<label for="tab__02" class="form__tabItem tabItem" data-tab="twitter">Twitter DMからのお問い合わせ</label>
				</div>
				<ul class="from__content">
					<!-- tabの中身 1つ目 -->
					<li id="mail" class="form__cntItem is-active">
						<div class="mail__flow">
							<?php if ( get_the_permalink() === ( home_url( 'contact/' ) ) ) : ?>
							<div class="mail__flowBox">
								<div class="mail__flowItem is-page"></div>
								<span class="mail__flowTxt">入力</span>
							</div>
							<div class="mail__flowBox">
								<div class="mail__flowItem"></div>
								<span class="mail__flowTxt">確認</span>
							</div>
							<div class="mail__flowBox">
								<div class="mail__flowItem"></div>
								<span class="mail__flowTxt">送信</span>
							</div>
							<?php elseif ( get_the_permalink() === ( home_url( 'contact/check/' ) ) ) : ?>
							<div class="mail__flowBox">
								<div class="mail__flowItem"></div>
								<span class="mail__flowTxt">入力</span>
							</div>
							<div class="mail__flowBox">
								<div class="mail__flowItem  is-page"></div>
								<span class="mail__flowTxt">確認</span>
							</div>
							<div class="mail__flowBox">
								<div class="mail__flowItem"></div>
								<span class="mail__flowTxt">送信</span>
							</div>
							<?php endif; ?>
						</div>
						<?php the_content(); ?>
					</li>
					<!-- tabの中身 2つ目 -->
					<li id="twitter" class="form__cntItem">
						<a href="https://twitter.com/nk_Nshouse" class="twitter__link">Twitter DMはこちらからお問い合わせください</a>
					</li>
				</ul>
			</div>
		</section>

<?php get_footer(); ?>

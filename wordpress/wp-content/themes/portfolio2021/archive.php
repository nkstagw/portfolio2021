<?php
/**
 * Template Name: archive
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>
<main class="archive">
	<article>
		<section class="kv">
			<div class="kv__img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/news_kv@2x.png" alt="">
			</div>
			<div class="kv__filter"></div>
			<div class="kv__box">
				<p class="kv__enTtl">News</p>
				<h2 class="kv__ttl">お知らせ</h2>
			</div>
		</section>

		<section class="topicPath inner">
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>" class="topicPath__link">ホーム</a></span>
			<span class="topicPath__item"><?php the_title(); ?></span>
		</section>

		<section class="news">
			<div class="news__container inner">
				<div class="section__head">
					<p class="section__enTtl">News</p>
					<h3 class="section__ttl">お知らせ</h3>
				</div>
				<div class="news__content">
					<div class="news__category">

					</div>
					<div class="news__article">
						<ul>
							<li>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>


		< class="contact">
				<div class="contact__container inner">
					<div class="contact__head">
						<p class="section__enTtl contact__enTtl">Contact</p>
						<h3 class="section__ttl contact__ttl">お問い合わせ</h3>
					</div>
					<div class="contact__content">
						<p class="contact__txt">
							サービスなどに関するお問い合わせは下記フォームよりお願いいたします。<br class="br-pc">
							またTwitterのDMからのお問い合わせも可能です。
						</p>
						<a href="" class="button contact__button">お問い合わせはこちら</a>
					</div><!-- content -->
				</div><!-- container -->
		</>

	</article>
</main>

<?php get_footer(); ?>
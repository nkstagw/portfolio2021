<?php
/**
 * Template Name: service
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>

<main class="page-service">
	<article>
		<section class="kv">
			<div class="kv__img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service_kv@2x.png" alt="">
			</div>
			<div class="kv__filter"></div>
			<div class="kv__box">
				<p class="kv__enTtl">Service</p>
				<h2 class="kv__ttl">サービス</h2>
			</div>
		</section>

		<section class="topicPath inner">
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>"
					class="topicPath__link">ホーム</a></span>
			<span class="topicPath__item"><?php the_title(); ?></span>
		</section>

		<section class="service">
			<div class="service__container inner">
				<div class="section__head">
					<p class="section__enTtl">Service</p>
					<h3 class="section__ttl">サービス</h3>
				</div>

				<div class="service__content">
					<ul class="service__cards">
						<li class="service__card card">
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/web_lp@2x.png" alt="">
							</div>
							<h4 class="card__ttl">Webサイト・LP制作</h4>
							<p class="card__content">新規の顧客獲得や事業の周知などお客様の目的や課題に沿ったWebサイト・ランディングページの制作を行います。</p>
							<a href="#" class="button contact__button card__button">詳しくはこちら</a>
						</li>

						<li class="service__card card">
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wordpress@2x.png" alt="">
							</div>
							<h4 class="card__ttl">WordPress実装</h4>
							<p class="card__content">最新情報のお知らせや商品の紹介など頻繁に更新が必要なWebサイトについては「WordPress」での実装いたします。</p>
							<a href="#" class="button contact__button card__button">詳しくはこちら</a>
						</li>

						<li class="service__card card">
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner@2x.png" alt="">
							</div>
							<h4 class="card__ttl">Web制作　外注パートナー</h4>
							<p class="card__content">Web制作の外注パートナーとしての活動も行なっております。ただの作業者ではなく自分から提供できる価値は何か」を常に考えていきます。</p>
							<a href="#" class="button contact__button card__button">詳しくはこちら</a>
						</li>
					</ul>
				</div>
			</div>

		</section>

		<section class="contact">
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

		</section>
	</article>
</main>
<?php get_footer(); ?>

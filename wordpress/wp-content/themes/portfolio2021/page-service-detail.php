<?php
/**
 * Template Name: service-detail
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>

<main class="page-service-detail">
	<article>
		<section class="kv">
			<h2 class="kv__ttl"><?php the_title(); ?></h2>
		</section>

		<section class="topicPath inner">
			<span class="topicPath__item">
				<a href="<?php echo esc_url( home_url() ); ?>" class="topicPath__link">ホーム</a>
			</span>
			<span class="topicPath__item">
				<?php $parent_id = $post->post_parent; ?>
				<a href="<?php echo esc_url( get_permalink( $parent_id ) ); ?>"
					class="topicPath__link"><?php echo esc_html( get_post( $parent_id )->post_title ); ?></a>
			</span>
			<span class="topicPath__item"><?php the_title(); ?></span>
		</section>

		<section class="problem">
			<div class="problem__container inner">
				<h3 class="problem__ttl">Webサイト制作における課題を解決します</h3>
				<ul class="problem__lists">
					<li class="problem__list">・Webサイト・LPを作りたいけど分からない事が多く自分では作る事ができない…</li>
					<li class="problem__list">・Webサイト作成ツールを使って自分で作ってみたけど他のサイトと同じような感じになってしまう…</li>
					<li class="problem__list">・Webサイト・LPを作成したいけど、どのような流れで進めていけば良いか分からない…</li>
					<li class="problem__list">・なるべくコストをかけずにWebサイト・LPを制作したい。</li>
				</ul>
			</div>
		</section>

		<section class="points">
			<div class="points__container inner">
				<h4 class="points__ttl">このサービスのポイント</h4>
				<ul class="points__lists">
					<li class="points__list">詳細なヒアリングを行いお客様のご希望について、イメージを共有しながら進めていきます。</li>
					<li class="points__list">お客様のご予算などに合わせて、最適に方法をご提案いたします</li>
				</ul>
			</div>
		</section>

		<section class="outline">
			<div class="outline__container inner">
				<div class="section__head">
					<p class="section__enTtl">Service Outline</p>
					<h3 class="section__ttl">サービス概要</h3>
				</div>
				<div class="outline__content">
					<ul class="outline__cards">
						<li class="outline__card card">
							<div class="card__content">
								<h4 class="card__ttl"></h4>
								<p class="card__txt"></p>
							</div>
							<div class="card__img">
								<img src="" alt="">
							</div>
						</li>
						<li class="outline__card"></li>
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

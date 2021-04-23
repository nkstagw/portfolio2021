<?php
/**
 * Template Name: service-detail-web_lp
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
				<h3 class="problem__ttl">Webサイト制作における<br class="br-sp">課題を解決します</h3>
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
								<h4 class="card__ttl">1）詳細なヒアリングでお客様の希望の形に</h4>
								<p class="card__txt">
									ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。
								</p>
							</div>
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/s-outline-hearing@2x.png"
									alt="">
							</div>
						</li>

						<li class="outline__card card">
							<div class="card__content">
								<h4 class="card__ttl">2）柔軟なご提案でお客様にあったご提案を</h4>
								<p class="card__txt">
									ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。
								</p>
							</div>
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/s-outline-advice@2x.png"
									alt="">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="flow">
			<div class="flow__container inner">
				<div class="section__head">
					<p class="section__enTtl">Service Flow</p>
					<h3 class="section__ttl">制作の流れ</h3>
				</div>
				<ul class="flow__cards">
					<li class="flow__card card">
						<div class="card__img">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flow-hearing.svg" alt="">
						</div>
						<div class="card__content">
							<h4 class="card__ttl">ヒアリング</h4>
							<p class="card__txt">
								ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。
							</p>
						</div>
					</li>

					<li class="flow__card card">
						<div class="card__img">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flow-design.svg" alt="">
						</div>
						<div class="card__content">
							<h4 class="card__ttl">デザイン</h4>
							<p class="card__txt">
								ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。
							</p>
						</div>
					</li>

					<li class="flow__card card">
						<div class="card__img">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flow-coding.svg" alt="">
						</div>
						<div class="card__content">
							<h4 class="card__ttl">コーディング</h4>
							<p class="card__txt">
								ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。
							</p>
						</div>
					</li>

					<li class="flow__card card">
						<div class="card__img">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flow-finish.svg" alt="">
						</div>
						<div class="card__content">
							<h4 class="card__ttl">納品</h4>
							<p class="card__txt">
								ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。
							</p>
						</div>
					</li>

				</ul>

			</div>
		</section>

		<section class="price">
			<div class="price__container inner">
				<div class="section__head">
					<p class="section__enTtl">Price</p>
					<h3 class="section__ttl">価格</h3>
				</div>

				<div class="price__content">
					<dl class="price__data">
						<div class="price__dataBox">
							<dt class="price__dataTtl">ランディングページ作成</dt>
							<dd class="price__dataCnt">¥100,000−</dd>
						</div>
						<div class="price__dataBox">
							<dt class="price__dataTtl">ランディングページ作成</dt>
							<dd class="price__dataCnt">¥100,000−</dd>
						</div>
						<div class="price__dataBox">
							<dt class="price__dataTtl">ランディングページ作成</dt>
							<dd class="price__dataCnt">¥100,000−</dd>
						</div>
					</dl>
					<p class="price__attention">金額は目安です。詳細はお問い合わせください</p>
				</div>

			</div>
		</section>

		<section class="anotherlink">
			<ul class="anotherlink__cards">

				<li class="anotherlink__card card">
					<div class="card__img">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wordpress@2x.png" alt="">
					</div>
					<h4 class="card__ttl">WordPress実装</h4>
					<a href="<?php echo esc_url( home_url( 'service' ) ); ?>/wordpress"
						class="button contact__button card__button">詳しくはこちら</a>
				</li>

				<li class="anotherlink__card card">
					<div class="card__img">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner@2x.png" alt="">
					</div>
					<h4 class="card__ttl">Web制作　外注パートナー</h4>
					<a href="<?php echo esc_url( home_url( 'service' ) ); ?>/partner" class="button contact__button card__button">詳しくはこちら</a>
				</li>
			</ul>
		</section>

<?php get_footer(); ?>

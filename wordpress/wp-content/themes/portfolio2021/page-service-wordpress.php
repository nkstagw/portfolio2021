<?php
/**
 * Template Name: service-detail-wordpress
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
				<h3 class="problem__ttl">WordPressを用いた制作を行います</h3>
				<ul class="problem__lists">
					<li class="problem__list">・お知らせやブログなど更新頻度が多いサイトを作りたい…</li>
					<li class="problem__list">・現在持っているサイトにお知らせなどの機能を追加したい…</li>
					<li class="problem__list">・テンプレートを用いて自分でサイトを作ってみたけどなんだかしっくりこない…</li>
				</ul>
			</div>
		</section>

		<section class="points">
			<div class="points__container inner">
				<h4 class="points__ttl">このサービスのポイント</h4>
				<ul class="points__lists">
					<li class="points__list">更新頻度の高いサイトをお客様自身で簡単に更新できるサイトを制作します</li>
					<li class="points__list">テンプレートテーマだけでなくオリジナルテーマでお客様のイメージにあったサイトを制作します</li>
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
								<h4 class="card__ttl">1）WordPressを用いた動的ページの制作</h4>
								<p class="card__txt">
									お知らせやブログなどの更新頻度や更新箇所が多いページに関しては「WordPress」で制作いたします。WordPressは現在公開されているサイトでも多く使用されているサービスであり、お客様自身でお知らせの更新やブログの記載が可能となります。
								</p>
							</div>
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wordpress_img_1@2x.png"
									alt="">
							</div>
						</li>

						<li class="outline__card card">
							<div class="card__content">
								<h4 class="card__ttl">2）ご予算に合わせた提案を</h4>
								<p class="card__txt">
									WordPressでの実装方法は大きく分けて「テンプレートテーマによる実装」と「オリジナルテーマによる実装」の2つがあります。前者はサイトのデザインにテンプレートを使用するためデザインに縛りがある代わりに、低コスト・短納期となるのがメリットです。オリジナルテーマに関してはテンプレートテーマでの実装と比較してコスト増や制作までの時間は必要となりますが、完全オリジナルのためデザインの自由度が高くお客様のイメージに合わせた制作が可能です。
								</p>
							</div>
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wordpress_img_2@2x.png"
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
								お客様の作りたいサイトのイメージを共有させていただき、テンプレートテーマ/オリジナルテーマのどちらが適切か、お客様によって最適な方法をご提案いたします。
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
								テンプレートテーマであればどのテンプレートを使いどのようにカスタマイズしていくのか、オリジナルテーマであればどのようなデザインにするのかというところをお客様と一緒に考えていきます。
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
								WordPressではお知らせの更新の他にお問い合わせフォームなど様々な機能をつける事が可能です。お客様が希望されるサイトに合わせてカスタマイズし、コーディング・実装を行います。
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
								基本的には作成したファイルをお渡しし、お客様似てWordPressをダウンロードしたサーバーへUPしていただきますがこちらで一括してお任せいただくことも可能ですのでお気軽にご相談いただければと思います。
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
							<dt class="price__dataTtl">テンプレートテーマでの制作</dt>
							<dd class="price__dataCnt">¥40,000~/Topページ　¥20,000~/下層ページ</dd>
						</div>
						<div class="price__dataBox">
							<dt class="price__dataTtl">オリジナルテーマでの制作</dt>
							<dd class="price__dataCnt">¥50,000~/Topページ　¥30,000~/下層ページ</dd>
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
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/web_lp@2x.png" alt="">
					</div>
					<h4 class="card__ttl">Webサイト・LP制作</h4>
					<a href="<?php echo esc_url( home_url( 'service' ) ); ?>/web_lp"
						class="button contact__button card__button">詳しくはこちら</a>
				</li>

				<li class="anotherlink__card card">
					<div class="card__img">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner@2x.png" alt="">
					</div>
					<h4 class="card__ttl">Web制作　外注パートナー</h4>
					<a href="<?php echo esc_url( home_url( 'service' ) ); ?>/partner"
						class="button contact__button card__button">詳しくはこちら</a>
				</li>
			</ul>
		</section>

		<?php get_footer(); ?>

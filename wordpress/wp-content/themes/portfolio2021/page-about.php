<?php
/**
 * Template Name: page-about
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>
<main class="page-about">
	<article>
		<section class="kv">
			<div class="kv__img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about_kv@2x.jpg" alt="">
			</div>
			<div class="kv__filter"></div>
			<div class="kv__box">
				<p class="kv__enTtl">About</p>
				<h2 class="kv__ttl">AIGVについて</h2>
			</div>
		</section>

		<section class="topicPath inner">
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>"
					class="topicPath__link">ホーム</a></span>
			<span class="topicPath__item"><?php the_title(); ?></span>
		</section>

		<section class="topTxt">
			<div class="topTxt__container inner">
				<h2 class="topTxt__ttl">あなたにとっての「良い意味でお節介な人」を目指して</h2>
				<p class="topTxt__txt">
					AIGVではお客様にとって一番「お節介な人」になる事を目指して活動しております。事業において人や課題に自ら積極的に関わり、その課題解決に向けて全力で取り組む事を大切にしております。ただのお節介ではなくお客様にとって「良い意味でお節介な人」を目指して様々な活動をしております。
				</p>
			</div>
		</section>
		<section class="value">
			<div class="value__container inner">
				<div class="section__head">
					<p class="section__enTtl">Our Value</p>
					<h3 class="section__ttl">AIGVの特長</h3>
				</div>
				<div class="value__content">
					<div class="value__card">
						<div class="value__cardCnt">
							<div class="value__cardHead">
								<span class="number">1</span>
								<h3 class="value__cardTtl">積極的な関わり</h3>
							</div>
							<p class="value__cardTxt">
								積極的に人や課題に対して関わっていきます。関わっていく中で課題の本質を捉え、表面化している課題だけでなく潜在化している課題に気づきお客様に沿ったご提案をしていきます。そして最終的にお客様「あなたにお願いしてよかった」と言ってもらえるような行動を意識しております。
							</p>
						</div>
						<div class="value__cardImg">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/page-about_1.svg" alt="">
						</div>
					</div><!-- card -->

					<div class="value__card">
						<div class="value__cardCnt">
							<div class="value__cardHead">
								<span class="number">2</span>
								<h3 class="value__cardTtl">目標達成のために</h3>
							</div>
							<p class="value__cardTxt">
								「節介」とは本来、【節操を守って世俗に流れない事】という意味があります。その言葉のように一般的な常識や枠に囚われる事なく、様々な考えを持ち目的・目標に向かって進んでいきます。</p>
						</div>
						<div class="value__cardImg">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/page-about_2.svg" alt="">
						</div>
					</div><!-- card -->

					<div class="value__card">
						<div class="value__cardCnt">
							<div class="value__cardHead">
								<span class="number">3</span>
								<h3 class="value__cardTtl">本当の価値提供</h3>
							</div>
							<p class="value__cardTxt">
								お客様にとって「本当の価値」の提供を行います。Webサイトを制作するだけでなく、お客様が求めている価値を見極め、先を見据えた行動からお願いされたことに対して常に120％の成果を出していきます。</p>
						</div>
						<div class="value__cardImg">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/page-about_3.svg" alt="">
						</div>
					</div><!-- card -->

				</div><!-- content -->
			</div><!-- container -->
		</section>

		<section class="outline">
			<div class="outline__container inner">
				<div class="section__head">
					<p class="section__enTtl">Outline</p>
					<h3 class="section__ttl">概要</h3>
				</div>
				<div class="outline__content">
					<dl class="outline__cntItems">

						<div class="outline__cntBox">
							<dt class="outline__cntTtl">名称</dt>
							<dd class="outline__cntItem">AIGV (アイギブ)</dd>
						</div>
						<div class="outline__cntBox">
							<dt class="outline__cntTtl">代表者</dt>
							<dd class="outline__cntItem">中川　翔太</dd>
						</div>
						<div class="outline__cntBox">
							<dt class="outline__cntTtl">連絡先</dt>
							<dd class="outline__cntItem">お問い合わせよりご連絡お願いします</dd>
						</div>
						<div class="outline__cntBox">
							<dt class="outline__cntTtl--last">事業内容</dt>
							<dd class="outline__cntItem--last">
								Webサイト制作・デザイン<br>
								Webサイト保守<br>
								Web制作外注パートナー
							</dd>
						</div>

					</dl>
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

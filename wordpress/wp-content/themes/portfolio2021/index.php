<?php
/**
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>
<main class="index">
	<article>
		<section class="fv">
			<ul class="fv__items">
				<li class="fv__item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fv_1@2x.png"
						alt=""></li>
				<li class="fv__item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fv_2@2x.png"
						alt=""></li>
				<li class="fv__item"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fv_3@2x.png"
						alt=""></li>
			</ul>
			<div class="fv__box">
				<h2 class="fv__ttl">お客様にとって一番 <br class="br-tab">「お節介な人」であるために</h2>
				<p class="fv__enTtl">Meddling in a Good Way</p>
			</div>
		</section>

		<section class="works">
			<div class="works__container inner">
				<div class="section__head">
					<p class="section__enTtl">Works</p>
					<h3 class="section__ttl">制作実績</h3>
				</div>
				<div class="works__content">
					<div class="works__cards">
						<?php
						$args      = array(
							'posts_per_page' => 3, // 投稿件数の指定
							'post_type'      => 'works',
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							?>
							<?php
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								?>
						<a href="<?php the_permalink(); ?>" class="works__card">
							<div class="works__cardImg">
								<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="">
							</div>
							<div class="works__cardTxt">
								<table class="works__tbl">
									<tr>
										<td class="works__tblTtl">サイト名</td>
										<td class="works__tblCnt"><?php the_title(); ?></td>
									</tr>
									<tr>
										<td class="works__tblTtl">概要</td>
										<td class="works__tblCnt"><?php echo esc_html( get_post_meta( $post->ID, '概要', true ) ); ?></td>
									</tr>
									<tr>
										<td class="works__tblTtl">担当部分</td>
										<td class="works__tblCnt"><?php echo esc_html( get_post_meta( $post->ID, '担当部分', true ) ); ?></td>
									</tr>
								</table>
							</div>
						</a>
						<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

						<?php else : ?>
						<p>表示できる情報はありません。</p>
						<?php endif; ?>

					</div><!-- cards -->
					<a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="button">詳細はこちら</a>
				</div><!-- content -->
			</div><!-- container -->
		</section>

		<section class="service">
			<div class="service__container inner">
				<div class="service__head">
					<p class="section__enTtl">Service</p>
					<h3 class="section__ttl">サービス一覧</h3>
					<p class="section__txt">
						Web制作に関する課題に対して、様々なサービスをご用意しております。顧客の獲得や事業の周知を目的としたWebサイト・ランディングページ制作、お客様自身で最新情報などの更新を行いたい際に有効なWordPressによるWebサイト実装、Web制作に関する外注パートナーなどのご提案をしております。
					</p>
				</div>

				<div class="service__content">
					<div class="service__cards">

						<div class="service__card">
							<div class="service__cardCnt">
								<h4 class="service__cardTtl">Webサイト・LP (ランディングページ)制作</h4>
								<p class="service__cardTxt">
									新規の顧客獲得や事業の周知などお客様の目的や課題に沿ったWebサイト・ランディングページの制作を行います。同じ業種や分野であってもお客様によって解決するべき課題は異なります。その課題解決のためにお客様と一緒に作り上げていきます。また近年のWebサイトはPCサイズだけでなくタブレットやスマートフォンなど画面のサイズを様々であるためレスポンシブ対応するなど、時代にあったWebサイト制作を行います。
								</p>
							</div>
							<div class="service__cardImg">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service_1@2x.jpg" alt="">
							</div>
						</div>

						<div class="service__card">
							<div class="service__cardCnt">
								<h4 class="service__cardTtl">WordPressによるWebサイト実装</h4>
								<p class="service__cardTxt">
									最新情報のお知らせや商品の紹介など頻繁に更新が必要なWebサイトについては「WordPress」での実装をお勧めしております。「WordPress」はWebサイト構築などの専門知識を持っていない場合でもお知らせや追加したいページなどお客様自身で更新を行なっていただけるサービスになります。Webサイトの構築もテンプレートを使用したものから、オリジナルのレイアウトのものまで様々ありますので、お客様のご予算などに合わせてご提案いたします。
								</p>
							</div>
							<div class="service__cardImg">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service_2@2x.jpg" alt="">
							</div>
						</div>

						<div class="service__card">
							<div class="service__cardCnt">
								<h4 class="service__cardTtl">Web制作　外注パートナー</h4>
								<p class="service__cardTxt">
									Web制作の外注パートナーとしての活動も行なっております。ただの作業者ではなく「どうすればお役に立つ事ができるか」「自分から提供できる価値は何か」を常に考えていきます。品質や納期、レスポンスの速さなどのコミュニケーションコストをかけないといった部分はもちろんの事、お客様のご要望に対して柔軟に対応しさらにより良いものを作るために、こちらから提案などもさせて頂きながら目的達成に向かって積極的に行動していきます。
								</p>
							</div>
							<div class="service__cardImg">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service_3@2x.jpg" alt="">
							</div>
						</div>

					</div><!-- cards -->
					<a href="" class="button">詳細はこちら</a>
				</div><!-- content -->
			</div><!-- container -->
		</section>

		<section class="about">
			<div class="about__container inner">
				<div class="about__head">
					<p class="section__enTtl">About</p>
					<h3 class="section__ttl">AIGVについて</h3>
					<p class="section__txt">
						AIGVでは人と人とのつながりが最も大切だと考えております。積極的に人や課題に関わりつつ信念を持って行動し、<br class="br-pc">
						お客様にとって「良い意味でお節介な人」になる事を目指しています。
					</p>
				</div>

				<div class="about__content">
					<div class="about__cards">

						<div class="about__card">
							<div class="about__cardImg">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about_1.svg" alt="">
							</div>
							<h4 class=about__cardTtl>積極的な関わり</h4>
							<p class="about__cardTxt">人や課題に対して積極的に関わっていく事で、表面的な課題だけでなく潜在化する課題に気づき解決していきます。</p>
						</div>

						<div class="about__card">
							<div class="about__cardImg">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about_2.svg" alt="">
							</div>
							<h4 class=about__cardTtl>目的達成のために</h4>
							<p class="about__cardTxt">一般的な常識に囚われる事なく、様々な可能性をご提案し目的・目標に向かって一緒に進んでいきます。</p>
						</div>

						<div class="about__card">
							<div class="about__cardImg">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about_3.svg" alt="">
							</div>
							<h4 class=about__cardTtl>本当の価値提供</h4>
							<p class="about__cardTxt">Webサイトを制作するだけでなく、お客様が求めている価値を見極め、先を見据えた行動から常に120％の成果を出していきます。</p>
						</div>

					</div><!-- cards -->
					<a href="" class="button">詳細はこちら</a>
				</div><!-- content -->
			</div><!-- container -->
		</section>

		<section class="news">
			<div class="news__container inner">
				<div class="news__head">
					<p class="section__enTtl">News</p>
					<h3 class="section__ttl">お知らせ</h3>
				</div>
				<div class="news__content">
					<?php
					$args      = array(
						'posts_per_page' => 3, // 投稿件数の指定
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
						?>
						<?php
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							?>

					<div class="news__article">
						<div class="news__article--date"><?php the_time( 'Y.n.j' ); ?></div>
						<div class="news__article--category"><?php the_category(); ?></div>
						<a href="<?php the_permalink(); ?>" class="news__article--ttl"><?php the_title(); ?></a>
					</div>

					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>
					<p>表示できる情報はありません。</p>
					<?php endif; ?>

					<a href="" class="button">詳細はこちら</a>
				</div><!-- content -->
			</div><!-- container -->


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

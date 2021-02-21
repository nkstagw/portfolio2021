<?php
/**
 *
 * @package WordPress
 */

?>
<?php get_header(); ?>

<main class="archive-works">
	<section class="kv">
		<div class="kv__img">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fv_3@2x.png" alt="">
		</div>
		<div class="kv__filter"></div>
		<div class="kv__box">
			<p class="kv__enTtl">Works</p>
			<h2 class="kv__ttl">制作実績</h2>
		</div>
	</section>

	<section class="topicPath inner">
		<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>" class="topicPath__link">ホーム</a></span>
		<span class="topicPath__item"><?php echo esc_html( get_post_type_object( get_post_type() )->label ); ?></span>
	</section>

	<section class="works">
		<div class="works__container inner">
			<div class="section__head">
				<p class="section__enTtl">Works</p>
				<h3 class="section__ttl">制作実績</h3>
			</div>

			<div class="works__content">
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

				<a href="<?php the_permalink(); ?>" class="works__card">
					<div class="works__cardImg">
						<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="">
					</div>
					<div class="works__txt">
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
</main>




<?php get_footer(); ?>

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
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>"
					class="topicPath__link">ホーム</a></span>
			<?php if ( is_archive() ) : ?>
				<?php
					$category_info = get_the_category();
					$category_name = $category_info[0]->cat_name;
				?>
			<span class="topicPath__item"><?php echo esc_html( $category_name ); ?></span>
			<?php else : ?>
			<span class="topicPath__item"><?php the_title(); ?></span>
			<?php endif; ?>
		</section>

		<section class="news">
			<div class="news__container inner">
				<div class="section__head">
					<p class="section__enTtl">News</p>
					<h3 class="section__ttl">お知らせ</h3>
				</div>
				<div class="news__content">
					<div class="news__category category">

						<span class="category__ttl">種別</span>

						<!-- カテゴリ一覧情報の取得 -->
						<?php
							// 親カテゴリーのものだけを一覧で取得
							$args       = array(
								'parent'  => 0,
								'orderby' => 'term_order',
								'order'   => 'ASC',
							);
							$categories = get_categories( $args );
							?>
						<!-- ここからループ処理開始(カテゴリー一覧) -->
						<?php foreach ( $categories as $category ) : ?>
						<!-- カテゴリーアーカイブページに遷移した時、カテゴリー名にアンダーバーをつけるための条件分岐 -->
							<?php if ( is_archive() ) : ?>
						<!-- 今いるページのカテゴリ情報、カテゴリIDを取得 -->
								<?php
								$category_info = get_the_category();
								$category_id   = $category_info[0]->term_id;
								?>
								<?php if ( $category->term_id === $category_id ) : ?>
									<?php $this_page = 'checked'; ?>
						<?php else : ?>
							<?php $this_page = ''; ?>
						<?php endif; ?>

						<?php else : ?>
						<?php endif; ?>
						<!-- 今いるページカテゴリIDと各カテゴリIDが同じならcheckedを付与 -->

						<input type="checkbox" name="<?php echo esc_html( $category->slug ); ?>"
							id="<?php echo esc_html( $category->slug ); ?>" class="category__check"
							<?php echo esc_html( $this_page ); ?> disabled>
						<label for="<?php echo esc_html( $category->slug ); ?>" class="category__label">
							<a href="<?php echo esc_html( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
						</label>
						<?php endforeach; ?>
						<!-- ループ処理終了-->

					</div>
					<!-- カテゴリページの時、カテゴリ名を取得 -->
					<?php if ( is_archive() ) : ?>
						<?php
						$category_slug = $category_info[0]->slug;
						?>
					<?php else : ?>
					<?php endif; ?>
					<!-- カテゴリページの時、カテゴリ名を取得 -->

					<?php
					$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args      = array(
						'paged'          => $paged,
						'posts_per_page' => 10, // 投稿件数の指定(-1で全て)
						'category_name'  => $category_slug,
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
				</div>

				<?php
				if ( function_exists( 'wp_pagenavi' ) ) {
					wp_pagenavi( array( 'query' => $the_query ) );
				}
				?>

			</div>
		</section>


		<div class="contact">
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
		</div>

	</article>
</main>

<?php get_footer(); ?>

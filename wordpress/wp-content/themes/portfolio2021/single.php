<?php
/**
 * Template Name: single
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>

<main class="single">
	<article>

		<section class="topicPath inner">
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url() ); ?>"
					class="topicPath__link">ホーム</a></span>
			<span class="topicPath__item"><a href="<?php echo esc_url( home_url( 'news' ) ); ?>"
					class="topicPath__link">news</a></span>
			<span class="topicPath__item"><?php the_title(); ?></span>
		</section>

		<section class="article content-padding">
			<div class="content-width">
				<div class="article__info">
					<span class="article__info-category"><?php the_category(); ?></span>
					<span class="article__info-date"><?php the_time( 'Y.m.d' ); ?></span>
				</div>
				<div class="article__content">
					<h1 class="article__ttl"><?php the_title(); ?></h1>
					<div class="article__txt"><?php the_content(); ?></div>
				</div>
			</div>
		</section>
	</article>
</main>

<?php
get_footer();

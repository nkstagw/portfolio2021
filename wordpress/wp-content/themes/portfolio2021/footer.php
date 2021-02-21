<?php
/**
 * Footer Component
 *
 * @package WordPress
 */

?>
<footer class="footer">
	<div class="footer__container inner">
		<div class="footer__head">
			<div class="footer__logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/AIGV_white.svg" alt="">
			</div>
			<p class="copyright"> © AIGV All Rights Reserved.</p>
		</div>

		<nav class="footer__nav">
			<ul class="footer__navItems">
				<li class="footer__navItem"><a href="" class="footer__link">ホーム</a></li>
				<li class="footer__navItem"><a href="" class="footer__link">制作実績</a></li>
				<li class="footer__navItem">
					<a href="" class="footer__link">サービス</a>
					<ul class="footer__subItems">
						<li class="footer__subItem"><a href="" class="footer__subLink">ー Webサイト・LP制作</a></li>
						<li class="footer__subItem"><a href="" class="footer__subLink">ー WordPress実装</a></li>
						<li class="footer__subItem"><a href="" class="footer__subLink">ー Web制作外注パートナー</a></li>
					</ul>
				</li>
				<li class="footer__navItem">
					<a href="" class="footer__link">AIGVについて</a>
					<ul class="footer__subItems">
						<li class="footer__subItem"><a href="" class="footer__subLink">ー 私たちの強み</a></li>
						<li class="footer__subItem"><a href="" class="footer__subLink">ー 概要</a></li>
					</ul>
				</li>
				<li class="footer__navItem"><a href="" class="footer__link">お知らせ</a></li>
			</ul>
		</nav>
	</div>
</footer>

<!-- ページtopに戻るボタン -->

<?php wp_footer(); ?>
</body>

</html>

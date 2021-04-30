<?php
/**
 * Template Name: service-detail-partner
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
				<h3 class="problem__ttl">ただ作業するだけではない、本当に信頼できるパートナーとして</h3>
				<ul class="problem__lists">
					<li class="problem__list">・手元に案件が多くあり手が回らない…</li>
					<li class="problem__list">・外注を検討しているが信頼できるパートナーがなかなかいない…</li>
					<li class="problem__list">・外注をしたいが制作物の品質がわからず不安…</li>
				</ul>
			</div>
		</section>

		<section class="points">
			<div class="points__container inner">
				<h4 class="points__ttl">このサービスのポイント</h4>
				<ul class="points__lists">
					<li class="points__list">クライアント様にまず品質を確認いただいた上で、依頼するかどうかを選択する事が可能</li>
					<li class="points__list">こまめな連絡と納期順守を徹底し、クライアント様に安心していただけるパートナーを目指します。</li>
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
								<h4 class="card__ttl">1）事前の品質確認で発注後のミスマッチを防ぐ</h4>
								<p class="card__txt">
									初めての外注先であればその人がどれくらいの品質で制作できるのか分かりづらく、またコミュニケーションなど実際にやりとりをし始めてから思っていたのと違うというミスマッチが起こる可能性があります。そこでAIGVでは制作内容の一部をまず制作させていただき、その品質やそれまでのやりとりなどを総合的に判断いただき正式に発注するかどうかを決める事が可能です。
								</p>
							</div>
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner_img_1@2x.png"
									alt="">
							</div>
						</li>

						<li class="outline__card card">
							<div class="card__content">
								<h4 class="card__ttl">2）細かいご連絡で遅れが出ない取り組み</h4>
								<p class="card__txt">
									進捗連絡や改善提案などのご連絡を詳細にさせていただき、クライアント様のご負担をなるべく減らす事を意識して取り組んでまいります。これまでの案件でも同様のご対応させていただいておりますが「こまめに連絡してもらえるのは助かる」とクライアント様からおっしゃっていただいております。こうした取り組みを行う事でコミュニケーションを円滑に行い、最終的には納期の短縮にもつながると考えております。
								</p>
							</div>
							<div class="card__img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/partner_img_2@2x.png"
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
								制作目的や内容などのサイトに関する情報や納期、価格、制作方法、公開可否など受注に関する事などをお伺いさせていただきます。
							</p>
						</div>
					</li>

					<li class="flow__card card">
						<div class="card__img">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flow-design.svg" alt="">
						</div>
						<div class="card__content">
							<h4 class="card__ttl">素材提供</h4>
							<p class="card__txt">
								デザインやテキスト・画像など提供いただける素材に関して共有いただきます。またこちらで準備が必要なものについては打ち合わせをさせていただき決定していきます。
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
								HTMLを用いたサイト/LP制作からWordPressのような動的サイトまで幅広くご対応可能です。またアニメーションやスライダーなどの動きのあるパーツの制作も可能です。
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
								Zipファイル形式やサーバーへの直接UPなどクライアント様のご希望に合わせてご対応可能です。また納品後は10日間であれば修正対応を基本無料でさせていただきます。
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
							<dt class="price__dataTtl">静的サイトコーディング</dt>
							<dd class="price__dataCnt">¥12,000~/Topページ　¥10,000~/下層ページ</dd>
						</div>
						<div class="price__dataBox">
							<dt class="price__dataTtl">WordPress(テンプレート)</dt>
							<dd class="price__dataCnt">¥15,000~/Topページ　¥13,000~/下層ページ</dd>
						</div>
						<div class="price__dataBox">
							<dt class="price__dataTtl">WordPress(オリジナル)</dt>
							<dd class="price__dataCnt">¥18,000~/Topページ　¥15,000~/下層ページ</dd>
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
					<a href="<?php echo esc_url( home_url( 'service' ) ); ?>/web_lp" class="button contact__button card__button">詳しくはこちら</a>
				</li>

				<li class="anotherlink__card card">
					<div class="card__img">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wordpress@2x.png" alt="">
					</div>
					<h4 class="card__ttl">WordPress実装</h4>
					<a href="<?php echo esc_url( home_url( 'service' ) ); ?>/wordpress" class="button contact__button card__button">詳しくはこちら</a>
				</li>
			</ul>
		</section>

<?php get_footer(); ?>

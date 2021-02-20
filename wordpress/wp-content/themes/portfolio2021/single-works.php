<?php get_header();?>

<main>
  <section class="kv">
      <h2 class="kv__ttl"><?php the_title(); ?></h2>
  </section>

  <section class="topicPath inner">
    <span class="topicPath__item"><a href="<?php echo esc_url(home_url()); ?>" class="topicPath__link">ホーム</a></span>
    <span class="topicPath__item"><a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>" class="topicPath__link"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a></span>
    <span class="topicPath__item"><?php the_title(); ?></span>
  </section>

  <section class="worksdetail">
    <div class="worksdetail__container inner">
      <div class="worksdetail__Img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
      </div>

      <div class="worksdetail__content">
        <table class="worksdetail__tbl">
          <tr>
            <td class="worksdetail__tblTtl">制作期間</td>
            <td class="worksdetail__tblCnt"><?php echo get_post_meta($post->ID , '制作期間' ,true); ?></td>
          </tr>
          <tr>
            <td class="worksdetail__tblTtl">制作ページ数</td>
            <td class="worksdetail__tblCnt"><?php echo get_post_meta($post->ID , '制作ページ数' ,true); ?></td>
          </tr>
          <tr>
            <td class="worksdetail__tblTtl">担当部分</td>
            <td class="worksdetail__tblCnt"><?php echo get_post_meta($post->ID , '担当部分' ,true); ?></td>
          </tr>
          <tr>
            <td class="worksdetail__tblTtl">URL</td>
            <td class="worksdetail__tblCnt"><a href="<?php echo get_post_meta($post->ID , 'URL' ,true); ?>" class="worksdetail__link"><?php echo get_post_meta($post->ID , 'URL' ,true); ?></a></td>
          </tr>
        </table>
        <div class="worksdetail__txt"><?php the_content(); ?></div>
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
</main>


        
<?php get_footer(); ?>
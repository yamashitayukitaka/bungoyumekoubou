<?php
// Template Name: front-page
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class="p-top">
  <!-- <div class="c-pageMv c_pageMv_t js-mvHeight p-newYear__TemporaryChange__mb"> -->
  <div class="c-pageMv c_pageMv_t js-mvHeight">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        住まいに<span class="u-orange--mv">夢</span>を、
        <br>暮らしに<span class="u-orange--mv">豊かさ</span>を。
      </h2>
      <p class="c-pageMv__ttl--small">
        Dream in your heart,
        <br>freedom in your future
      </p>
    </div>
    <!-- <ul class="p-top__mv__appealList p-newYear__TemporaryChange js-navList"> -->
    <ul class="p-top__mv__appealList js-navList">
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top001.webp');">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/star3.webp" alt="">
        <p class="p-top__mv__appealTtl">断熱性能</p>
        <p class="p-top__mv__appealTxt">
          UA値
          <br>0.36以下
        </p>
      </li>
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top001.webp');">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/star3.webp" alt="">
        <p class="p-top__mv__appealTtl">気密性能</p>
        <p class="p-top__mv__appealTxt">
          C値
          <br>0.3以下
        </p>
      </li>
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top001.webp');">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/star3.webp" alt="">
        <p class="p-top__mv__appealTtl">耐震性能</p>
        <p class="p-top__mv__appealTxt">
          標準仕様
          <br>耐震等級3
        </p>
      </li>
    </ul>
    <div class="c-pageMv__img__wrap--top top_Slider">
      <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top1"></div>
      <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top2"></div>
      <!-- <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top3"></div> -->
      <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top4"></div>
      <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top5"></div>
      <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top6"></div>
      <!-- <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top7"></div> -->
      <div class="c-pageMv__img__wrap--top c-pageMv__img__wrap--top8"></div>
    </div>
    <!-- <section class = "p-newYear">
      <p class = "p-newYear__txt l-content--ratio">平素は格別のご愛顧を賜り、厚くお礼申し上げます。
        <br>誠に勝手ながら、下記期間を年末年始休業期間とさせていただきます。
        <br>【年末年始休業期間】
        <br>2024年12月28日（土）～2025年1月3日（金）
        <br>上記期間中に来場をご希望の方は、お問い合わせくださいますようお願いいたします。
        <br>新年は1月4日（月）より営業開始となります。
        <br>※TOSハウジングメッセ展示場は1月4日（月）12時よりOPENとなります。
        <br>
        <br>お客様にご満足いただけるサービスの提供をめざし、社員一同より一層努力して参りますので、何卒よろしくお願い申し上げます。
      </p>
    </section> -->
  </div>

  

  <section class="p-top__desc">
    <div class="l-content--xl p-top__desc__content">
      <span class="p-top__desc__imgWrap" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/family_img.webp');"></span>
      <div class="top__desc__imgWrap2">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/penchi.webp'" alt="">
      </div>
      <p class="p-top__desc__copy">
        あなたの<span class="u-orange--mv">「ゆめ」</span>
        <br>いっしょにつくります
      </p>
      <p class="p-top__desc__txt">
        豊後夢工房が考える本当に良い「家」とは、<br class="sp">毎日がちょっと特別になる場所。
        <br>家族と過ごす時間がもっと愛おしくなり、<br class="sp">心と体がほっと安らぐ住まいです。
        <br>私たち豊後夢工房は、あなたとご家族が笑顔で快適に過ごせる
        <br><span class="u-orange--sm">「快適ゆめ空間」</span>をご提供する施工会社です。
      </p>
      <span class="p-top__desc__imgWrap--right" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/support-right.webp');"></span>
    </div>
  </section>

  <section class="p-top__lineUp">
    <div class="l-content--large">
      <div class="u-center u-mb15">
        <h3 class="c-title--sectionLine">
          STYLE_LINE_UP
        </h3>
      </div>
      <div class="u-center u-mb50">
        <p class="c-title--orangeLine">
          <span class="marker">あなたの「ゆめ」を叶える、特別なラインナップ</span>
        </p>
      </div>
      <!--
      <ul class = "p-top__lineUp__list">
        <li class = "p-top__lineUp__item">
          <div class = "p-top__lineUp__txtWrap">
            <h4 class = "p-top__lineUp__ttl">タイトル</h4>
            <p class = "p-top__lineUp__txt">
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
            </p>
          </div>
          <figure class = "p-top__lineUp__img" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top02.webp');"></figure>
        </li>
        <li class = "p-top__lineUp__item">
          <div class = "p-top__lineUp__txtWrap">
            <h4 class = "p-top__lineUp__ttl">タイトル</h4>
            <p class = "p-top__lineUp__txt">
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
            </p>
          </div>
          <figure class = "p-top__lineUp__img" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top02.webp');"></figure>
        </li>
        <li class = "p-top__lineUp__item">
          <div class = "p-top__lineUp__txtWrap">
            <h4 class = "p-top__lineUp__ttl">タイトル</h4>
            <p class = "p-top__lineUp__txt">
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
            </p>
          </div>
          <figure class = "p-top__lineUp__img" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top02.webp');"></figure>
        </li>
      </ul>
      -->
      <ul class="p-top__lineUpRow__list">
        <li class="p-top__lineUpRow__item">
          <a href="<?php echo esc_url(home_url('heig')); ?>">
            <figure class="p-top__lineUpRow__imgWrap"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/Group01.webp"></figure>
            <span class="p-top__lineUpRow__tag">自由設計</span>
            <p class="p-top__lineUpRow__txt">暮らしをもっと自由に</p>
          </a>
        </li>
        <li class="p-top__lineUpRow__item">
          <a href="<?php echo esc_url(home_url('rireve')); ?>">
            <figure class="p-top__lineUpRow__imgWrap"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/Group02.webp"></figure>
            <span class="p-top__lineUpRow__tag">自由設計</span>
            <p class="p-top__lineUpRow__txt">次世代のZEHハウス</p>
          </a>
        </li>
        <li class="p-top__lineUpRow__item">
          <a href="<?php echo esc_url(home_url('irohaie')); ?>">
            <figure class="p-top__lineUpRow__imgWrap"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/Group03.webp"></figure>
            <span class="p-top__lineUpRow__tag">自由設計</span>
            <p class="p-top__lineUpRow__txt">安心の定額制、なのに自由設計</p>
          </a>
        </li>
      </ul>
    </div>
  </section>

  
  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h3 class="c-title--sectionLine">
        EVENT
      </h3>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">最新情報をお届けします</span>
      </p>
    </div>
    <?php
    $event = array(
      'post_type' => 'xo_event',
      'posts_per_page' => 4,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ); ?>
    <?php $eventLoop = new WP_Query($event); ?>
    <?php if ($eventLoop->have_posts()) : ?>
      <ul class="p-content__list u-mb50">
        <?php while ($eventLoop->have_posts()) : $eventLoop->the_post(); ?>
          <?php get_template_part('event-loop', 'event'); ?>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
      </ul>
      <div class="u-center">
        <a href="<?php echo esc_url(home_url('xo_event')); ?>" class="c-button--page">イベント一覧へ</a>
      </div>
  </section>

  <a href="<?php echo esc_url(home_url('model-house')); ?>">
    <section class="p-top__introduction u-mb100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top01.webp');">
      <div class="p-top__introduction__ttlWrap">
        <h3>
          <span class="marker c-title--sectionEn">MODEL_HOUSE</span>
        </h3>
        <p class="p-top__introduction__txt">
          豊後夢工房の暮らしを体験できるモデルハウス。
          <br>ぜひ一度ご来場いただき体験してみてください。
        </p>
      </div>
      <figure class="p-top__introduction__imgWrap--house"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/dream_studio_1.webp"></figure>
    </section>
  </a>

  <?php get_template_part('studio-part', 'studio'); ?>

  <a href="<?php echo esc_url(home_url('catalog')); ?>">
    <section class="p-top__introduction u-mb100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top01.webp');">
      <div class="p-top__introduction__ttlWrap">
        <h3>
          <span class="marker c-title--sectionEn">CATALOG</span>
        </h3>
        <p class="p-top__introduction__txt">
          理想の住まい作りをサポート。
          <br>無料資料請求はこちらから
        </p>
      </div>
      <figure class="p-top__introduction__imgWrap"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_catalog.webp"></figure>
    </section>
  </a>

  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h3 class="c-title--sectionLine">
        WORKS&VOICE
      </h3>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">施工事例＆お客様の声</span>
      </p>
    </div>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //get_query_var('paged')で現在表示されているページ番号を取得する。
    $works = array(
      'post_type' => 'works',
      'posts_per_page' => 4,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ); ?>
    <?php $worksLoop = new WP_Query($works); ?>
    <?php if ($worksLoop->have_posts()) : ?>
      <ul class="p-content__list u-mb50">
        <?php while ($worksLoop->have_posts()) : $worksLoop->the_post(); ?>
          <?php get_template_part('works-loop', 'works'); ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;
    wp_reset_postdata(); ?>
    <div class="u-center">
      <a href="<?php echo esc_url(home_url('works')); ?>" class="c-button--page">施工事例一覧へ</a>
    </div>
  </section>
  <section class="u-mb80">
    <?php
    $args = array(
      'post_type' => 'staff',
      'posts_per_page' => -1,
      'order' => 'DESC',
      'orderby' => 'date',
    ); ?>
    <?php $staffLoop = new WP_Query($args); ?>
    <ul class="p-top__staff__list js-staffSlider">
      <?php if ($staffLoop->have_posts()) : ?>
        <?php while ($staffLoop->have_posts()) : $staffLoop->the_post(); ?>
          <li class="p-top__staff__item">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_field('staff-img'); ?>" class="p-about__staff__listImg" alt="スタッフ画像">
            </a>
          </li>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
    <h3 class="p-top__staff__ttl u-center u-mb20">
      YUME STAFF
    </h3>
    <p class="p-top__staff__subTtl">
      ゆめ空間づくりスタッフ
    </p>
    <div class="u-center yume_staff_p">
      <div class="top__desc__imgWrap3">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/tenten.webp'" alt="">
      </div>
      <p class="p-top__staff__copy">
        あなたの<span class="p-top__staff__copy--orange">「ゆめ」</span>
        <br>いっしょにつくります。
      </p>
    </div>
    <div class="u-center u-mb30">
      <a href="<?php echo esc_url(home_url('staff')); ?>" class="c-button--page">スタッフ一覧へ</a>
    </div>
    <?php
    $args = array(
      'post_type' => 'staff',
      'posts_per_page' => -1,
      'order' => 'ASC',
      'orderby' => 'date',
    ); ?>
    <?php $staffLoop = new WP_Query($args); ?>
    <ul class="p-top__staff__list js-staffSlider--reverse" dir="rtl">
      <?php if ($staffLoop->have_posts()) : ?>
        <?php while ($staffLoop->have_posts()) : $staffLoop->the_post(); ?>
          <li class="p-top__staff__item">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_field('staff-img'); ?>" class="p-about__staff__listImg" alt="スタッフ画像">
            </a>
          </li>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
  </section>
  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h3 class="c-title--sectionLine">
        BUILT＆LAND
      </h3>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">土地・物件情報</span>
      </p>
    </div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //get_query_var('paged')で現在表示されているページ番号を取得する。
    $property = array(
      'post_type' => 'property',
      'posts_per_page' => 4,
      'paged' => $paged, //get_query_varで得られた現在表示されているページ番号を渡す。この部分は、ページネーションが正しく機能するために非常に重要です。get_query_var('paged') で取得した値を 'paged' => $paged としてクエリに設定することで、正しいページが表示されるようになります。
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ); ?>
    <?php $propertyLoop = new WP_Query($property); ?>
    <?php if ($propertyLoop->have_posts()) : ?>
      <ul class="p-content__list">
        <?php while ($propertyLoop->have_posts()) : $propertyLoop->the_post(); ?>
          <?php get_template_part('property-loop', 'property'); ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;
    wp_reset_postdata(); ?>
  </section>

  <div class="u-center u-mb50">
    <a href="<?php echo esc_url(home_url('property')); ?>" class="c-button--page">土地・物件情報一覧へ</a>
  </div>

  <!--
  <iframe width="853" height="480" src="https://my.matterport.com/show/?m=T7Mj3PoA11z" frameborder="0" allowfullscreen="" allow="xr-spatial-tracking"></iframe>
  -->

</main>
<?php get_footer(); ?>
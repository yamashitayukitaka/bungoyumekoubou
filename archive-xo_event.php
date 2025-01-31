<?php 
// Template Name: archive-xo_event
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<?php 
  $taxonomy = 'area';
  $postType = 'xo_event';
  $tag ='event-type'
?>
<main>
<h2 class = "c-title--section u-mb50">
  イベント情報
</h2>

  <?php $terms = get_terms($taxonomy, 
    [
    'hide_empty' => false,
    'parent' =>0,
    'orderby'=>'id',
    'order'=>'DESC',
    ]
  );?>
 
    <ul class = "c-term__list">
      <li class = "c-term__list__item u-current">
        <a href = "<?php echo esc_url (get_post_type_archive_link('xo_event')); ?>">
          すべて
        </a>
      </li>
      <?php foreach($terms as $term):?>
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

    <?php $eventTags = get_terms($tag, 
        [
        'hide_empty' => false,
        'parent' =>0,
        'orderby'=>'id',
        'order'=>'DESC',
        ]
      );?>

    <ul class = "c-tag__list l-content--large">
      
        <li class = "c-tag__list__item">
          <a href = "#" class = "u-currentTab c-tag__list__link">すべて</a>
        </li>
      
      <?php foreach($eventTags as $eventTag):?>
        <?php $eventSlug = $eventTag->slug ;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo get_term_link($eventSlug,$tag); ?>" class = "js-tab c-tag__list__link">
            <?php echo esc_html($eventTag->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

  <section class = "l-content u-mb100">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;//get_query_var('paged')で現在表示されているページ番号を取得する。
      $event = array(
      'post_type' => 'xo_event',
      'posts_per_page' =>7,
      'paged'=>$paged,//get_query_varで得られた現在表示されているページ番号を渡す。この部分は、ページネーションが正しく機能するために非常に重要です。get_query_var('paged') で取得した値を 'paged' => $paged としてクエリに設定することで、正しいページが表示されるようになります。
      'orderby' => 'menu_order',
      'order' => 'ASC',
    );?>
    <?php $eventLoop = new WP_Query($event);?>
    <?php if ($eventLoop->have_posts()): ?>
      <ul class = "p-content__list js-prepend">
        <?php while ($eventLoop->have_posts()) : $eventLoop->the_post();?>
          <?php get_template_part('event-loop','event'); ?>
        <?php endwhile;
        endif;
        wp_reset_postdata();?>
      </ul>
    
    <?php if ($eventLoop->found_posts > $event['posts_per_page']):?>
      <?php the_posts_pagination(); ?>
    <?php endif; ?>
      
    </section>
  <?php get_template_part('xo-event','calendar'); ?>
</main>
  
<?php get_footer(); ?>
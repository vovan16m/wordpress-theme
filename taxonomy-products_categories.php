<?php get_header();?>

<section class="product-subs">
  <div class="container">
    <div class="items owl-carousel">
      <?php
      $id = get_queried_object()->term_id;
      global $query_string;
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args=array(
          'post_type' => 'products',
          'tax_query' => array(
            array(
                   'taxonomy' => 'products_categories',
                   'field'    => 'id',
                   'terms'    => $id
                   )
           ),
          'post__in'  => get_option( 'sticky_posts' ),
          'posts_per_page' => -1
       );
       $args1=array(
          'post_type' => 'products',
          'tax_query' => array(
            array(
                   'taxonomy' => 'products_categories',
                   'field'    => 'id',
                   'terms'    => $id
                   )
           ),
          'post__not_in' => get_option("sticky_posts"),
          'ignore_sticky_posts' => 0,
          'posts_per_page' => -1
       );

      $get_posts = query_posts($args1);
      $get_posts1 = query_posts($args);
      $final_posts = array_merge( $get_posts1, $get_posts );
      //var_dump($final_posts);
      $chunked_posts = array_chunk($final_posts, 2);

      ?>
      <?php foreach($chunked_posts as $posts):?>
          <div class="box">
              <?php foreach($posts as $post):?>
                <div class="item">
                  <div class="col-6">
                    <div class="text">
                      <div class="title"><?php the_title();?></div>
                      <div class="for"><?php echo $post->post_excerpt; ?></div>
                      <a href="<?php the_permalink();?>">VIEW DETAILS</a>
                    </div>
                  </div>
                  <div class="col-6">
                    <img src="<?php echo get_the_post_thumbnail_url( $post->id,  'crop-product' );?>" alt="" >
                  </div>
                </div>
            <?php endforeach;?>
          </div>
      <?php endforeach;?>

    </div>
  </div>
</section>

<?php get_footer();?>

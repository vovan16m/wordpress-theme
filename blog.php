<?php /* Template Name: Blog */ ?>
<?php get_header();?>

<section class="blog">
  <div class="container">
    <div class="posts">
      <?php
      	global $query_string;
        $posts_per_page = get_option( 'posts_per_page' );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args=array(
          'posts_per_page' => $posts_per_page,
    		   'paged' => $paged
    		 );
        $temp = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query($args);
        if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
      ?>
      <div class="post">
        <div class="img-box">
          <img src="<?php echo get_the_post_thumbnail_url( $id, 'blog-post' );?>" alt="" >
        </div>
        <div class="text">
          <div class="date"><?php the_time('m M, Y') ?> by <span><?php echo get_the_author();?></span></div>
          <div class="title"><?php the_title();?></div>
          <p><?php echo(get_the_excerpt()); ?></p>
          <a href="<?php the_permalink();?>">Read More <i class="la la-arrow-right"></i></a>
        </div>
      </div>
      <?php
        endwhile;
        endif;
        global $wp_query;
        $count = $wp_query->max_num_pages;
      ?>
    </div>
  </div>
</section>

<?php get_footer();?>

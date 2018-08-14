<?php /* Template Name: Products category */ ?>
<?php get_header();?>

<section class="product-category">
  <div class="container">
    <div class="col-6">
      <div class="category-slider owl-carousel">
        <?php
        $images = get_field('slider');
        if( $images ): ?>
          <?php foreach( $images as $image ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-6">
      <div class="text">
        <?php while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title();?></h2>
          <p><?php echo(get_the_content()); ?></p>
          <?php
          $slug = get_field('link');
          $term = get_term_by('slug', $slug, 'products_categories');
          $term_id = $term->term_id;
          $term_link = get_term_link($term_id, 'products_categories');
           
          global $post;
          if( $post->ID == 339) { } else { ?>
          <a href="<?php echo $term_link;?>">VIEW PRODUCTS</a>
          <?php } ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>

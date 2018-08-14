<?php /* Template Name: About */ ?>
<?php get_header();?>

<section class="about">
  <div class="container">
    <div class="col-6">
      <div class="box">
        <?php
        $image = get_field('image');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <div class="text">
          <?php the_field('text'); ?>
        </div>
      </div>

    </div>
    <div class="col-6">
      <div class="content-box">
        <div class="text-box">
          <?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>
        <section class="article markup t1">
          <?php echo  get_the_content(); ?>
        </section>
        <?php
        endwhile;
        ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer();?>

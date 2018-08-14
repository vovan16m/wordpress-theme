<?php /* Template Name: Products */ ?>
<?php get_header();?>

<section class="products">
  <div class="container">
    <div class="box">
      <?php
      $i=0;
      if( have_rows('categories') ):
      while ( have_rows('categories') ) : the_row();?>
        <?php if($i != 2){ ?>
          <div class="sm-item">
              <?php
              $image = get_sub_field('full_image');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" class="bg"  />
              <?php endif; ?>

              <?php
              $image = get_sub_field('mobile_image');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" class="sm" />
              <?php endif; ?>
            <div class="text">
              <a href="<?php the_sub_field('link');?>"  class="title"><?php the_sub_field('category_name');?></a>
              <a href="<?php the_sub_field('link');?>" class="link">VIEW ALL</a>
            </div>
          </div>
        <?php } else { ?>
          <div class="item sm-item">
            <?php
            $image = get_sub_field('full_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" class="bg"  />
            <?php endif; ?>

            <?php
            $image = get_sub_field('mobile_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" class="sm" />
            <?php endif; ?>
            <div class="text">
              <a href="<?php the_sub_field('link');?>"  class="title"><?php the_sub_field('category_name');?></a>
              <a href="<?php the_sub_field('link');?>" class="link">VIEW ALL</a>
            </div>
          </div>
        <?php } ?>
      <?php
      $i++;
      endwhile;
      endif;
      ?>
    </div>

  </div>
</section>

<?php get_footer();?>

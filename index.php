<?php /* Template Name: Home Page */ ?>
<?php get_header();?>

<section class="main">
  <div class="container">
    <div class="col-6">
      <div class="slider">
        <div class="box owl-carousel">
          <?php
          if( have_rows('slide') ):
          while ( have_rows('slide') ) : the_row();?>

            <div class="item" style="background: url(<?php $image = get_sub_field('slider-one'); echo $image['url']?>)">
              <div class="title"><?php	the_sub_field('title');?></div>
              <p><?php	the_sub_field('text');?></p>
            </div>

          <?php endwhile;
          endif;
          ?>
        </div>
        <div class="social">
          <a href="<?php the_field('facebook');?>"><i class="fab fa-facebook-f"></i></a>
          <a href="<?php the_field('twitter');?>"><i class="fab fa-twitter"></i></a>
          <a href="<?php the_field('linkedin');?>"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="contact-slider owl-carousel">
        <?php
        if( have_rows('second_slider') ):
        while ( have_rows('second_slider') ) : the_row();?>
          <div class="item">
            <div class="img-box">
              <?php
								$image = get_sub_field('image');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['sizes']['slider-img']; ?>" alt="<?php echo $image[0]; ?>" />
								<?php endif; ?>
            </div>
            <div class="text">
              <div class="title"><?php	the_sub_field('title-1');?></div>
              <p><?php	the_sub_field('text-1');?></p>
              <a href="<?php	the_sub_field('link');?>">READ MORE</a>
            </div>
          </div>

        <?php endwhile;
        endif;
        ?>

      </div>

    </div>
    <div class="col-3">
      <div class="info-img">
        <?php
        $image = get_field('third_image');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>

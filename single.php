<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
  <section class="blog-single">
    <div class="container">
      <div class="box">
        <div class="text-box">
          <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' );?>" alt="" >
          <div class="content-box">
            <div class="reverse">
              <div class="top-box">
                <div class="title"><?php the_title();?></div>
                <div class="social">
                  <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo $current_url;?>">
                    <img src="<?php echo get_template_directory_uri();?>/img/ml.png" alt="">
                  </a>
                  <a target="_blank" href="https://twitter.com/share?url=<?php echo $current_url;?>">
                    <img src="<?php echo get_template_directory_uri();?>/img/tw.png" alt="">
                  </a>
                  <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url;?>">
                    <img src="<?php echo get_template_directory_uri();?>/img/in.png" alt="">
                  </a>
                  <a target="_blank" href="mailto:?Subject=&amp;Body=<?php echo $current_url;?>">
                    <img src="<?php echo get_template_directory_uri();?>/img/fb.png" alt="">
                  </a>
                </div>
              </div>
              <div class="date"><?php the_time('m M, Y') ?> by <span><?php echo get_the_author();?></span></div>
            </div>

            <p><?php echo(get_the_content()); ?></p>

            <div class="social mob">
              <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo $current_url;?>">
                <img src="<?php echo get_template_directory_uri();?>/img/ml.png" alt="">
              </a>
              <a target="_blank" href="https://twitter.com/share?url=<?php echo $current_url;?>">
                <img src="<?php echo get_template_directory_uri();?>/img/tw.png" alt="">
              </a>
              <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url;?>">
                <img src="<?php echo get_template_directory_uri();?>/img/in.png" alt="">
              </a>
              <a target="_blank" href="mailto:?Subject=&amp;Body=<?php echo $current_url;?>">
                <img src="<?php echo get_template_directory_uri();?>/img/fb.png" alt="">
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php get_footer();?>

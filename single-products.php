<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="product-single">
    <div class="container">
      <div class="col-6">
        <div class="single-slider owl-carousel">
          <?php
          $images = get_field('slider');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <ul class="files">
          <li>
            <?php
            $file = get_field('pdf');
            if( $file ): ?>
            	<a href="<?php echo $file['url']; ?>"><i class="far fa-file-pdf"></i> PDF</a>
            <?php endif; ?>
          </li>
          <li>
            <?php
            $file = get_field('files');
            if( $file ): ?>
              <a href="<?php echo $file['url']; ?>"><i class="far fa-file"></i> files</a>
            <?php endif; ?>
          </li>
          <li>
            <?php
            $file = get_field('specification');
            if( $file ): ?>
              <a href="<?php echo $file['url']; ?>"><i class="la la-download"></i>DOWNLOAD SPECIFICATION</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <div class="col-6">
        <div class="text">
          <div class="box">
            <div class="main-text">
              <div class="title"><?php the_title();?></div>
              <div class="for"><?php get_the_excerpt();?></div>
              <div class="excerpt"><?php echo get_the_content();?></div>
            </div>

            <div class="reverse">
              <div class="params">
                <div class="colors">
                <?php
                    if( have_rows('standard_colours') ): ?>
                  <h5>Standard Colours:</h5>
                  <ul class="items">
                      <? while ( have_rows('standard_colours') ) : the_row();?>
                      <li>
                        <a href="" style="background: <?php	the_sub_field('color');?>" title="<?php the_sub_field('color_name');?>"></a>
                      </li>
                    <?php endwhile;
                    ?>
                  </ul>
                <?php endif; ?>
                </div>
                <div class="colors">
                <?php
                    if( have_rows('non_standard_colours') ): ?>
                  <h5>Non Standard Colours<span>(*Additional charges apply):</span></h5>
                  <ul class="items">
                      <? while ( have_rows('non_standard_colours') ) : the_row();?>
                      <li>
                        <a href="" style="background: <?php	the_sub_field('color');?>" title="<?php the_sub_field('color_name');?>"></a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                </div>

                <?php $images = get_field('available_materials'); ?>
                <?php if(!empty($images)) { ?>
                <div class="materials">
                  <h5>Available Materials:</h5>
                  <ul class="items">
                    <?php foreach( $images as $image ): ?>
                        <li>
                          <a href="">
                            <img src="<?php echo $image['url']; ?>" title="<?php echo $image['alt']; ?>" />
                          </a>
                        </li>
                      <?php endforeach; ?>
                  </ul>
                </div>
                <?php } ?>
              </div>

              <div class="features">
                <h5>Key Features:</h5>
                <ul>
                  <?php the_field('key_features');?>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php /* Template Name: Default Page */ ?>
<?php get_header();?>

<section class="main">
        <div class="container">
                <div class="content-box">
                    <div class="text-box">
                        <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();?>
                            <section class="article markup t1">
                                <h2><?php echo  get_the_title() ?></h2>
                                <?php echo  get_the_content(); ?>
                            </section>
                        <?php
                        endwhile;
                        ?>
                    </div>

                </div>
            </div>
</section>

<?php get_footer();?>

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Maritime_Skills_Academy
 * @since Maritime Skills Academy 1.0
 */

get_header();
?>
<section class="main">
        <div class="container">
                <div class="content-box not-found-page">
                    <div class="text-box">
                            <section class="article markup t1">
                                <h2>404 - Page Not Found</h2>
                                <?php echo the_field('404_page_text', 'option'); ?>
                            </section>
                    </div>

                </div>
            </div>
</section>

<?php get_footer(); ?>

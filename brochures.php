<?php /* Template Name: Brochures Page */ ?>
<?php get_header();
$brochures = get_field('brochures');
?>

<section class="main">
        <div class="container">
                <div class="content-box">
                    <?php foreach($brochures as $brochure) { ?>
                        <div class="row brochure">
                            <div class="col-3">
                            <img src="<?php echo $brochure['image']; ?>" class="img-responsive">
                            </div>
                            <div class="col-9">
                                <div class="brochure-info">
                                    <h2><?php echo $brochure['title']; ?></h2>
                                    <a href="<?php echo $brochure['download_link'] ?>">Download</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
</section>

<?php get_footer();?>
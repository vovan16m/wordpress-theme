<footer>
  <div class="footer_desk">
    <div class="container">
      <p>
        <?php the_field('text_df', 'option'); ?>
      </p>
    </div>
  </div>
  <div class="social">
    <a href="<?php the_field('facebook', 'option'); ?>"><i class="fab fa-facebook-f"></i></a>
    <a href="<?php the_field('twitter', 'option'); ?>"><i class="fab fa-twitter"></i></a>
    <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fab fa-linkedin-in"></i></a>
  </div>
</footer>

<script>
    jQuery( document ).ready(function($) {
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ('21' == event.detail.contactFormId) { 
                window.location.href = "/thank-you/";
            }
        }, false );
    });
</script>
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<?php wp_footer();?>

</body>
</html>

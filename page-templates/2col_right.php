<?php /* Template Name:  Right Col, width: 2 */ ?>


<?php
    get_header();
?>
      <div class="row main">
      <div class="col-sm-8 col-sm-offset-4 col-xs-12 imggrid">
        <?php the_field('row1_col1'); ?>
      </div>
      </div>

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    else:
        _e('Sorry, no posts matched your criteria.');
    endif;
?>
      </div>
<?php
    get_footer();
?>


<?php
$templatedirectory = get_template_directory_uri();

?>

<!-- <script src="<?php echo get_template_directory_uri() ?>/js/icarousel.js"></script> -->
<?php
if (get_field('carousel')) {
?>
<script src="<?php echo get_template_directory_uri() ?>/js/ilightbox.js"></script>
<link rel="stylesheet" href="<?php echo $templatedirectory ?>/css/lightbox.css">
<script src="<?php echo $templatedirectory ?>/js/lightbox.js"></script>


<script>
lightbox.option({
    'resizeDuration': 0,
    'wrapAround': true,
    'alwaysShowNavOnTouchDevices': true,
    'disableScrolling': true,
    'fadeDuration': 0
})
</script>

<style>
.lightboxOverlay {
    background-color: #fff;
    opacity: 1;
}

.lightbox .lb-image, .lb-container, .lb-outerContainer {
    border-radius: 0;
}

.lb-caption {
    color: #333;
    font-weight: 300;
}
</style>

<?php
}
?>

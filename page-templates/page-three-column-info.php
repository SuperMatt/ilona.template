<?php /* Template Name: Three Column with Info */ ?>


<?php
    get_header();
?>
      <div class="row main">
      <div class="col-sm-4 imggrid">
        <?php the_field('col1'); ?>
      </div>
      <div class="col-sm-4 imggrid">
        <?php the_field('col2'); ?>
      </div>
      <div class="col-sm-4 imggrid">
        <?php the_field('col3'); ?>
      </div>
      </div>
      <div class="row main">
      <div class="col-sm-4">
        <?php the_field('info1'); ?>
      </div>
      <div class="col-sm-4">
        <?php the_field('info2'); ?>
      </div>
      <div class="col-sm-4">
        <?php the_field('info3'); ?>
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

.lb-image, .lb-container {
    border-radius: 0;
}
</style>

<?php /* Template Name: Home - Two Row */ ?>


<?php
    wp_head();
    get_header();
?>
      <div class="row main">
      <div class="col-sm-8 col-xs-12 imggrid">
        <?php the_field('col1'); ?>
      </div>
      <div class="col-sm-4 col-xs-12 imggrid">
        <?php the_field('col2'); ?>
      </div>
      </div>
      <div class="row main">
      <div class="col-sm-4 col-xs-12 imggrid">
        <?php the_field('row2-col1'); ?>
      </div>
      <div class="col-sm-4 col-xs-12 imggrid">
        <?php the_field('row2-col2'); ?>
      </div>
      <div class="col-sm-4 col-xs-12 imggrid">
        <?php the_field('row2-col3'); ?>
      </div>
      </div>

      <div class="row">

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
    wp_footer();
?>


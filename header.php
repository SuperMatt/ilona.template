<?php
$templatedirectory = get_template_directory_uri();

?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300|Playfair+Display' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $templatedirectory ?>/css/bootstrap.min.css">
    <script src="<?php echo $templatedirectory ?>/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo $templatedirectory ?>/js/icarousel.js"></script> -->
    <title><?php bloginfo('name'); echo " - "; the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo $templatedirectory ?>/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row navigation">
        <div class="col-sm-12 hidden-xs">
          <div class="pull-left"><h1 class="title"><?php bloginfo('name');?></h1></div>
          <div class="pull-right titlesize"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?></div>
        </div>

        <div class="col-sm-12 hidden-sm hidden-md hidden-lg">
            <h1 class="title"><?php bloginfo('name');?>
        </div>
        <div class="col-sm-12 hidden-sm hidden-md hidden-lg">
        <?php
            wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) );
        ?>
        </div>
      </div>

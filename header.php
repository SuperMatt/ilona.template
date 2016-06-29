<?php
$templatedirectory = get_template_directory_uri();

?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300|Playfair+Display|Libre+Baskerville' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $templatedirectory ?>/css/bootstrap.min.css">
    <script src="<?php echo $templatedirectory ?>/js/bootstrap.min.js"></script>
    <title><?php bloginfo('name'); echo " - "; the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo $templatedirectory ?>/css/wordpress.css">
    <link rel="stylesheet" href="<?php echo $templatedirectory ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <div class="row headerrow">
        <div class="col-sm-12 hidden-xs navigation">
          <div class="pull-left"><a href="/" class="title"><h1 class="title"><?php bloginfo('name');?></h1></a></div>
          <div class="pull-right titlesize"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?></div>
        </div>

        <div class="col-sm-12 hidden-sm hidden-md hidden-lg navigation">
            <h1 class="title"><?php bloginfo('name');?>
        </div>
        <div class="col-sm-12 hidden-sm hidden-md hidden-lg navigation">
        <?php
            wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) );
        ?>
        </div>
      </div>

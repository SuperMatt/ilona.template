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
    <title><?php bloginfo('name'); echo " - "; the_title(); ?></title>


    <style>
      body {
        color: #333;
        font-family: Muli, "sans-serif";
        font-weight: 300;
      }
      h1 {
        font-family: "Playfair Display", serif;
      }
      h1.title {
        font-size: 36pt;
        color: #333;
        font-variant: small-caps;
        font-weight: 400;
        text-transform: lowercase;
        margin-bottom: 0px;
      }

      p {
        color: #333;
        font-family: Muli, sans-serif;
        font-weight: 300;
        text-align: justify;
      }

      .row.main p {
        padding-left: 15px;
        padding-right: 15px;
      }

      .row.main .col-xs-1 p, .row.main .col-xs-2 p, .row.main .col-xs-3 p,
      .row.main .col-xs-4 p, .row.main .col-xs-5 p, .row.main .col-xs-6 p,
      .row.main .col-xs-7 p, .row.main .col-xs-8 p, .row.main .col-xs-9 p,
      .row.main .col-xs-10 p, .row.main .col-xs-11 p, .row.main .col-xs-12 p,
      .row.main .col-sm-1 p, .row.main .col-sm-2 p, .row.main .col-sm-3 p,
      .row.main .col-sm-4 p, .row.main .col-sm-5 p, .row.main .col-sm-6 p,
      .row.main .col-sm-7 p, .row.main .col-sm-8 p, .row.main .col-sm-9 p,
      .row.main .col-sm-10 p, .row.main .col-sm-11 p, .row.main .col-sm-12 p,
      .row.main .col-md-1 p, .row.main .col-md-2 p, .row.main .col-md-3 p,
      .row.main .col-md-4 p, .row.main .col-md-5 p, .row.main .col-md-6 p,
      .row.main .col-md-7 p, .row.main .col-md-8 p, .row.main .col-md-9 p,
      .row.main .col-md-10 p, .row.main .col-md-11 p, .row.main .col-md-12 p,
      .row.main .col-lg-1 p, .row.main .col-lg-2 p, .row.main .col-lg-3 p,
      .row.main .col-lg-4 p, .row.main .col-lg-5 p, .row.main .col-lg-6 p,
      .row.main .col-lg-7 p, .row.main .col-lg-8 p, .row.main .col-lg-9 p,
      .row.main .col-lg-10 p, .row.main .col-lg-11 p, .row.main .col-lg-12 p
       {
        padding-left: 0px;
        padding-right: 0px;
      }

      .list-inline li {
        padding-left: 0px;
        padding-right: 0px;
        margin-left: 5px;
        margin-right: 5px;
      }

      .list-inline li a {
        color: #333;
      }

      .list-inline li a:hover {
        color: #333;
        text-decoration: none;
        padding-bottom: 2px;
        border-bottom: 1px #333 solid;
      }

      li.current-menu-item {
        border-bottom: 1px #333 solid;
      }

      .navigation {
        height: 50px;
      }

      .footer {
        text-align: center;
        font-size: 8pt;
        margin-top: 30px;
      }


    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="title"><?php bloginfo('name'); ?></h1>
        </div>
      </div>
      <div class="row navigation">
        <div class="col-sm-3">
          <p><?php bloginfo('description');?></p>
        </div>
        <div class="col-sm-9 hidden-sm hidden-md hidden-lg">
        <?php
            wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) );
        ?>
        </div>
        <div class="col-sm-9 text-right hidden-xs">
        <?php
            wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) );
        ?>
        </div>
      </div>

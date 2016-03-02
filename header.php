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
        height: 60px;
      }

      .footer {
        text-align: center;
        font-size: 8pt;
        margin-top: 30px;
      }

      .titlesize {
        height: 60px;
        vertical-align: text-bottom;
        position: relative;
        margin-top: 48px;
      }

      .igallery img {
        max-width: 100%;
        height: auto;
      }

      .igallery .wp-caption  {
        max-width: 100%;
      }

      .igallery .wp-caption .wp-caption-text {
        position: absolute;
        top: 0px;
        height: calc(100% - 20px);
        width: calc(100% - 30px);
        background-color: rgba(178,223,219,0.9);
        opacity: 0;
        left: 15px;
        color: #fff;
        text-align: center;
        padding-top: calc(50% - 32px);
        font-size: 32px;
        font-weight: bold;
        font-family: "Muli";
        margin-top: 10px;
      }

      .igallery .wp-caption .wp-caption-text:hover {
        opacity: 1;
      }

      .col-sm-4 .wp-caption {
        max-width: 100%;
        opacity: 1;
        z-index: 1;
      }

      .col-sm-4 .wp-caption:hover {
        z-index: -1;
      }

      .col-sm-4 .wp-caption .wp-caption-text {
        position: absolute;
        top: 0;
        background-color: rgba(178,223,219,0.9);
        color: #FFF;
        z-index: 0;


      }


    </style>
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

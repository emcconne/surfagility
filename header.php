<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,400italic,700,800,700italic,300italic|Merriweather:400,300,400italic,700,700italic,900,300italic' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Less styles have to be imported from here and cannot be @imported in styles.css -->
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory') ?>/less/surfagility.less"/>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Latest compiled and minified CSS -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php
    $pages = get_pages();
    ?>

    <?php if ( $pages ) : ?>
    <div class="dropdown-wrapper">
      <ul class="nav" role="navigation">
        <li class="dropdown">
          <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-copy"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <?php foreach ( $pages as $page ) : ?>
                <li><a tabindex="-1" data-target="#" href="<?php echo $page->guid; ?>"><?php echo $page->post_title;?></a></li>
            <?php endforeach; ?> 
          </ul>
        </li>
      </ul>
    </div>
    <?php endif; ?>
    <a class="go-home" href="<?php bloginfo('url') ?>" title="Go Home">
      <div class="home-container">
        <i class="icon-home"></i>
      </div>
    </a>
      <div class="container-fluid page-wrapper">
        <div class="row page-container">

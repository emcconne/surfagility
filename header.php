<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php
    $pages = get_pages($args);
    ?>

    <?php if ( $pages ) : ?>
    <div class="dropdown-wrapper">
      <ul class="nav" role="navigation">
        <li class="dropdown">
          <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <?php foreach ( $pages as $page ) : ?>
                <li><a tabindex="-1" data-target="#" href="<?php echo $page->guid; ?>"><?php echo $page->post_title;?></a></li>
            <?php endforeach; ?> 
          </ul>
        </li>
      </ul>
    </div>
    <?php endif; ?>
    <a class="go-home" href="<?php bloginfo('url') ?>" title="Go Home" alt="Go Home">
      <div class="home-container">
        <i class="icon-home"></i>
      </div>
    </a>
      <div class="container-fluid">
        <div class="row">
<!--
  <div class="container"> 
    <div class="row">
      <div class="cover-container sidebar-nav-fixed col-sm-4">
        <aside class="cover">
          <div class="cover-img" style="background-image:url('<?php bloginfo('template_directory');?>/images/cover_1.jpg')">
            <div class="cover-body">
              <div class="cover-body-inner">
                <h1 class="cover-title"> 
                  Medium
                </h1>
                <p class="cover-description">
                  A better place to read and write things that matter. 
                  <a href="//medium.com/about/9e53ca408c48" title="Learn more about Medium">
                    Learn more
                  </a>. 
                  <br>
                  <br>
                    Read our 
                  <a title="Read Medium’s Top 100 Posts from last month" href="https://medium.com/top-100/july-2013">
                    top posts from last month
                  </a>.
                </p>
                <div class="cover-actions">
                  <a href="/m/account/authenticate-twitter" class="btn btn-primary">
                    <span class="icons icons-twitter"></span>
                    Sign in with Twitter
                  </a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
      <div class="main span-fixed-sidebar col-sm-8">
-->
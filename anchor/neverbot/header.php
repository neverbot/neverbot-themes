<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(current_url()); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/neverbot">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>">

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">

    <?php if(customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>

    <?php setlocale(LC_ALL, 'es_ES'); ?>

  </head>
  
  <body>
  
    <header>
			<nav class="navbar navbar-default navbar-static-top nb-navbar" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed-nav-menu">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand nb-logo" href="<?php echo base_url(); ?>">neverbot.com</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="collapsed-nav-menu">

            <form class="navbar-form navbar-right" role="search" id="search" action="<?php echo search_url(); ?>" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="term" name="term" placeholder="Buscar&hellip;" value="<?php echo search_term(); ?>">
              </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


      <div class="nb-head hidden-xs">
        <a class="nb-main-logo" href="<?php echo base_url(); ?>">neverbot</a>
      </div>

    </header>




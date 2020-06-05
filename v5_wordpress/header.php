<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); wp_title(); ?></title> 
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="description" content="Pagina personal de Ivan Alonso. Una forma como cualquier otra de perder el tiempo." />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/ico" />

<?php wp_head(); ?>

<!-- jquery, bootstrap, fontawesome -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- Facebook and Open Graph -->
<link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/name_for_opengraph.gif" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/name_for_facebook.gif" />

<?php
include_once('nb_funcs.php');
// include_once('ad_infame.php');
?>

</head>

<body>

  <header>
    <div class="nb-head hidden-xs">
      <div class="nb-main-logo">
        <a href="http://blog.neverbot.com">neverbot</a>
      </div> 
    </div>
  </header>

  <section class="nb-content">

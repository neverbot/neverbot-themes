<?php

/*
  Custom theme functions
*/


function nb_twitter_account() {
  return site_meta('twitter', 'neverbot');
}

function nb_twitter_url() {
  return 'https://twitter.com/' . twitter_account();
}

function nb_total_articles() {
  return Post::where(Base::table('posts.status'), '=', 'published')->count();
}

function nb_article_number($id = 0) {
  return Post::where(Base::table('posts.status'), '=', 'published')->
        where(Base::table('posts.id'), '<=', $id)->count();
}

// tmp fix
function nb_article_total_comments() {
  return Comment::where('post', '=', article_id())
          ->where('status', '=', 'approved')
          ->count();
}

function nb_get_page_content($id = 1) {
  $page = Page::where('id', '=', "$id")->get();

  // register single post
  Registry::set('page', $page[0]);

  return page_content();
}

function nb_pluralise($amount, $str, $alt = '') {
  return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function nb_relative_time($date) {
  if(is_numeric($date)) $date = '@' . $date;

  $user_timezone = new DateTimeZone(Config::app('timezone'));
  $date = new DateTime($date, $user_timezone);

  // get current date in user timezone
  $now = new DateTime('now', $user_timezone);

  $elapsed = $now->format('U') - $date->format('U');

  if($elapsed <= 1) {
    return 'Just now';
  }

  $times = array(
    31104000 => 'year',
    2592000 => 'month',
    604800 => 'week',
    86400 => 'day',
    3600 => 'hour',
    60 => 'minute',
    1 => 'second'
  );

  foreach($times as $seconds => $title) {
    $rounded = $elapsed / $seconds;

    if($rounded > 1) {
      $rounded = round($rounded);
      return $rounded . ' ' . nb_pluralise($rounded, $title) . ' ago';
    }
  }
}
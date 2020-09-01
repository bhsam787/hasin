<?php

function voyla_theme_bootstrapping(){
  load_theme_textdomain('voyla');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme','voyla_theme_bootstrapping');

function voyla_stylesheet_load(){
  wp_enqueue_style('mystyle',get_stylesheet_uri());
  wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts','voyla_stylesheet_load');


function wordcount_text_change($text){
  $text="wanna";
  return $text;
}
add_filter( 'wordcount_text', 'wordcount_text_change' ); //text added and changed from plugins
function wordcount_tag_change($tag){
  $tag="p";
  return $tag;
}
add_filter( 'wordcount_tag', 'wordcount_tag_change' ); //text added and changed from plugins

 ?>

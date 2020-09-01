<?php
/*
Plugin Name: Word Count
Plugin URI: https://wwww.facebook.com
Description: this is my first word count plugin
Version: 1.0
Author: Sam vai
Text Domain: word-count
Domain Path: /languages/
*/

function wordcount_activation_hook(){}
register_activation_hook(__FILE__,'wordcount_activation_hook' ); // when plugin get activated

function wordcount_deactivation_hook(){}
register_deactivation_hook(__FILE__,'wordcount_deactivation_hook' ); // when plugin get deactivated


function wordcount_plugin_textdomain(){
  load_plugin_textdomain( 'word-count',false,dirname(__FILE__).'/languages'); // loading text domain
}
add_action( 'plugins_loaded','wordcount_plugin_textdomain');


function wordcount_count_words($title){
  $html_bad= strip_tags($title);
  $wordn=str_word_count($html_bad);
  $label= __('Word Count is', 'word-count');
  $label=apply_filters( 'wordcount_text', $label );
  $tag=apply_filters( 'wordcount_tag','h2' );
  $title .= sprintf('<%s>%s :%s </%s>',$tag,$label , $wordn,$tag);

  return $title;
}
add_filter( 'the_title','wordcount_count_words');

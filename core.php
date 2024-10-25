<?php
/*
Plugin Name: فیلتر کلمات نامناسب در کامنت ها
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: پلاگین فیلتر کلمات نامناسب در کامنت ها
Author: مهشید پویه
Version: 1.0.0License: GPLv2 or later
Author URI: http://sample-mp.local
*/
defined('ABSPATH') || exit;

 function convert_word_to_link($content){
     $words = ['wordpress'=>'وردپرس','php'=>'php'];
     $cat = 'category';
     foreach ($words as $key=>$value){
        $replace = '<a href="'.site_url().'/'.$cat.'/'.$key.'">'.$value.'</a>';
        $content = str_replace($value,$replace,$content);
     }
     return $content;
 }
add_filter('the_content','convert_word_to_link');

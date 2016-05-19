<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootswatch-slate', get_template_directory_uri() . '/bootswatch-slate.css',false,'1.1','all');
wp_enqueue_style( 'about-style', get_template_directory_uri() . '/about-style.css',false,'1.1','all');
wp_enqueue_style( 'portfolio-style', get_template_directory_uri() . '/portfolio-style.css',false,'1.1','all');
wp_enqueue_style( 'video-style', get_template_directory_uri() . '/video-style.css',false,'1.1','all');

?>
<?php

function university_files() {
    //here we can load CSS and JS files
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    //third argument is an array of dependencies because it needs to know if there are any dependencies that need to be loaded before this file. In this case we want to load jQuery before our custom JS file. We can find the name of the jQuery file in the WP documentation.If there is no dependency, we set the value to NULL
    //fourth argument is the version of the file, we can put whatever we want, but it's a good practice to put the version of the theme. 
    //last argument is a boolean that tells WP if we want to load the file in the header or in the footer. True means in the footer, false means in the header
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    //first argument is the name of the style, the name doesn't matter, it's just a name to identify the style
    //second argument is a WP function that will return the path to the style.css file
}

add_action('wp_enqueue_scripts', 'university_files');
// add_action() is a WP function that will allow us to execute a function at a specific time
//first argument is the name of the action or kind of action, like loading a CSS or JS file, in this case we want to load a style
//second argument is the name of the function that will be executed when the action is called at a specific time

function university_features() {
    //here we can add theme support
    add_theme_support('title-tag');
    //this function will add the title tag to the head of the page
 /*    add_theme_support('post-thumbnails');
    //this function will add the featured image functionality to the theme
    add_image_size('professorLandscape', 400, 260, true);
    //this function will add a new image size to the theme. The first argument is the name of the image size, the second argument is the width, the third argument is the height, the fourth argument is a boolean that tells WP if we want to crop the image or not
    add_image_size('professorPortrait', 480, 650, true);
    //this function will add a new image size to the theme. The first argument is the name of the image size, the second argument is the width, the third argument is the height, the fourth argument is a boolean that tells WP if we want to crop the image or not
    add_image_size('pageBanner', 1500, 350, true);
    //this function will add a new image size to the theme. The first argument is the name of the image size, the second argument is the width, the third argument is the height, the fourth argument is a boolean that tells WP if we want to crop the image or not */
}

add_action('after_setup_theme', 'university_features');
//this action will be executed after the theme is set up
//first argument is the name of the action
//second argument is the name of the function that will be executed when the action is called at a specific time
<?php

function university_files() {
    //here we can load CSS and JS files
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
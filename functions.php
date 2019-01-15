<?php 
    function university_files() {
        #The arguments when you load a js file are:
        #1st: the nickname of this file
        #2nd: Function that finds .js location
        #3rd: Dependencies with other scipts.If none, put NULL.
        #4th: Version of file(doesn't really matter).
        #5th: Where to laod the file. If true, load it at the bottom of the page.
        #(Better for overall performance)
        wp_enqueue_script('main-university-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
        #The two attributes are:
        #1st: nickname of the file
        #2nd: Function that finds .css location
        #If I want to laod a .js file, I have to
        #change it to wp_enqueue_script
        wp_enqueue_style('university_main_styles',get_stylesheet_uri());
        wp_enqueue_style('font-awsome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    }
    #The two attributes are:
    #1st: You put that when you want to load a .css or .js file
    #2nd: Function name 
    add_action('wp_enqueue_scripts','university_files');

    function university_features() {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme','university_features');
?>

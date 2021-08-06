<?php
wp_set_password('Chocolate098','Mehwish');
function BookLovers(){
    wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','BookLovers');

//get top ancestor id
function get_top_ancestor_id(){
    global $post;
    if($post->post_parent){
        $ancestors= array_reverse(get_post_ancestors($post->ID));
        return $ancestors [0];
    }
   return $post->ID;  
}
//customize excerpt word count length
function custom_excerpt_length() {
    return 25;
}
add_filter('excerpt_length','custom_excerpt_length');
//Theme Setup
function learningwordpress_setup()
{//navigation Menus
    register_nav_menus(array(
         'primary'=>__('Primary menu'),
         'footer'=>__('Footer menu'),
)
);
    //Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail',180,120,array('left','top'));
    add_image_size('banner-image',920,1600,array('left','top'));
}
add_action('after_setup_theme','learningwordpress_setup');

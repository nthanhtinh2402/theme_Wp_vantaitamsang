<?php
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Menu' ));
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'init', 'register_my_menu' );
    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
    
?>

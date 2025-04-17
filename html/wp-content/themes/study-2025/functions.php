<?php

/**
 * get all pages
 * @return WP_Query
 */
function get_all_pages() {
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    return new WP_Query($args);
}

/**
 * get all posts
 * @return WP_Query
 */
function get_all_posts() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    return new WP_Query($args);
}
<?php

function biruIpbFawwazadd_custom_category()
{
    if (!function_exists('wp_insert_category')) {
        require_once(ABSPATH . '/wp-admin/includes/taxonomy.php');
    }

    //Define the category
    $ach = array(
        'cat_name' => 'Achievement',
        'category_description' => 'A Cool Achievement',
        'category_nicename' => 'achievement',
        'category_parent' => ''
    );

    $news = array(
        'cat_name' => 'News',
        'category_description' => 'A Cool News',
        'category_nicename' => 'news',
        'category_parent' => ''
    );

    // Create the category
    $ach_cat = wp_insert_category($ach);
    $news_cat = wp_insert_category($news);
}
add_action('after_switch_theme', 'biruIpbFawwazadd_custom_category');

add_theme_support( 'post-thumbnails' );

function set_default_thumbnail_on_publishs()
{
    $upload_dir = wp_upload_dir();
    $image_url = 'https://hukum.ipb.ac.id/wp-content/uploads/2021/05/Logo-IPB-University-Horizontal.png';
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);
    if (wp_mkdir_p($upload_dir['path'])) {
        $file = $upload_dir['path'] . '/' . $filename;
    } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
    }
    file_put_contents($file, $image_data);
    $wp_filetype = wp_check_filetype($filename, null);
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment($attachment, $file);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    wp_update_attachment_metadata($attach_id, $attach_data);
    return $attach_id;
}

function biruIpbFawwazinsert_default_post_news()
{
    add_option('biruIpbFawwazinsert_default_post_news', 0);
    $flag = get_option('biruIpbFawwazinsert_default_post_news');

    if (!$flag) {
        $post_id = wp_insert_post(array(
            'post_title' => 'ini News.',
            'post_content' => 'ini News.',
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_category' => array(get_cat_ID('News'))
        ));

        $achievement_id = wp_insert_post(array(
            'post_title' => 'ini achievement.',
            'post_content' => 'ini achievement.',
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_category' => array(get_cat_ID('Achievement'))
        ));

        set_post_thumbnail($post_id, set_default_thumbnail_on_publishs());


        update_option('biruIpbFawwazinsert_default_post_news', 1);
    }
}
add_action('after_switch_theme', 'biruIpbFawwazinsert_default_post_news');


function biruIpbFawwazthe_deactivate()
{
    $post_title = 'ini News.';
    $post = get_page_by_title($post_title, OBJECT, 'post');
    if ($post) {
        wp_delete_post($post->ID, true);
    }
    $post_title = 'ini achievement.';
    $post = get_page_by_title($post_title, OBJECT, 'post');
    if ($post) {
        wp_delete_post($post->ID, true);
    }
    delete_option('biruIpbFawwazinsert_default_post_news');
}
add_action('switch_theme', 'biruIpbFawwazthe_deactivate');

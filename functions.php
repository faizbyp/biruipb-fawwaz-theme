<?php

function load_bootstrap()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.css', array(), false, 'all'); // memanggil dir stylesheet
  wp_enqueue_style('bootstrap'); // memasang stylesheet

  wp_register_script('bootstrapjs', get_template_directory_uri() . '/bootstrap/bootstrap.bundle.min.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_bootstrap'); // menjalankan fungsi

//add to menu items
add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme')
  )
);

class Walker_Top_Menu extends Walker_Nav_menu
{
  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $output .= ' <li class="nav-item"><a class="nav-link text-primary" href="' . $item->url . '">' . $item->title . '</a></li>';
  }
}

//get image from template
function getImageFromTemplate($image)
{
  return get_template_directory_uri() . '/assets/img/' . $image;
}

//add dynamic news in front page
add_theme_support('post-thumbnails');

//add default category "News" if theme installed in wordpress
function biruIpbFawwazadd_custom_category()
{
  $category_name = 'News';
  if (!term_exists($category_name, 'category')) {
    wp_insert_term($category_name, 'category');
  }
}
add_action('init', 'biruIpbFawwazadd_custom_category');

//
function biruIpbFawwazinsert_default_post_news()
{
  $post_title = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
  $post = get_page_by_title($post_title, OBJECT, 'post');
  if (!$post) {
    //check option
    $flag = get_option('biruIpbFawwazinsert_default_post_news');
    if (!$flag) {
      // Insert the post
      $post_id = wp_insert_post(array(
        'post_title'    => $post_title,
        'post_content'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'post_status'   => 'publish',
        'post_type'     => 'post',
        'post_category' => array(get_cat_ID('News'))
      ));
      // set option
      add_option('biruIpbFawwazinsert_default_post_news', 1);
    }
  }
}
add_action('after_setup_theme', 'biruIpbFawwazinsert_default_post_news');


function biruIpbFawwazthe_deactivate()
{
  $post_title = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
  $post = get_page_by_title($post_title, OBJECT, 'post');
  if ($post) {
    wp_delete_post($post->ID, true);
  }
  update_option('biruIpbFawwazinsert_default_post_news', 0);
}


add_action('switch_theme', 'biruIpbFawwazthe_deactivate');


function biruIpbFawwazget_lastestPost(){
  
}

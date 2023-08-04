<?php

function prblog_styles_scripts() {

    $ver = '1.0.6';

    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', 'NULL', $ver, true);
    wp_enqueue_script('mainjs');

    wp_register_script('submitformajax', get_template_directory_uri() . '/assets/js/submit-form-ajax.js', array('jquery'), $ver, true);
    wp_enqueue_script('submitformajax');

    wp_register_style('stylecss', get_template_directory_uri() . '/assets/css/style.css', array(), $ver, 'all');
    wp_enqueue_style('stylecss');
    
    if(is_page('About')) {
      wp_register_style('aboutmecss', get_template_directory_uri() . '/assets/css/aboutme.css', array(), $ver, 'all');
      wp_enqueue_style('aboutmecss');
    }

    if(is_page('Contact')) {
      wp_register_style('contactcss', get_template_directory_uri() . '/assets/css/contact.css', array(), $ver, 'all');
      wp_enqueue_style('contactcss');
    }

    if(is_page('Blog') || (is_home())) {
      wp_register_style('blogcss', get_template_directory_uri() . '/assets/css/blog.css', array(), $ver, 'all');
      wp_enqueue_style('blogcss');

      wp_enqueue_script('blogjs', get_template_directory_uri() .  '/assets/js/blog.js', array('jquery'), $ver, true);

      // wp_register_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true );
	    // wp_enqueue_script('slick-js');


      // wp_enqueue_style('slick-css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
      // wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
      
    }

    if(is_single())  {
      wp_register_style('singlecss', get_template_directory_uri() . '/assets/css/single.css', array(), $ver, 'all');
      wp_enqueue_style('singlecss');

      wp_register_style('stylecss', get_template_directory_uri() . '/assets/css/style.css', array(), $ver, 'all');
      wp_enqueue_style('stylecss');
    }

    
}

add_action('wp_enqueue_scripts', 'prblog_styles_scripts');


function prblog_fonts_icons() {

  $ver = '1.0.0';

  //Enqueue font
  wp_enqueue_style( 'google-fonts', '<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">', $ver, false );
  // Enqueue icon font stylesheet
  wp_enqueue_style( 'mytheme-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array());
}

add_action( 'wp_enqueue_scripts', 'prblog_fonts_icons' );



function pr_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'pr_init');


function custom_category_template( $template ) {
  if ( is_category() ) {
      $cat = get_queried_object();
      $template = locate_template( 'category-' . $cat->slug . '.php' );
  }
  return $template;
}
add_filter( 'category_template', 'custom_category_template' );


// form submission ------------------------------------------

function my_custom_wp_mail_failed($wp_error) {
  error_log($wp_error->get_error_message());
}
add_action('wp_mail_failed', 'my_custom_wp_mail_failed');


// AJAX ----------------------------------------------------

function pr_send_email() {

  $name = $_POST["form_data"]["name"];
  $email = $_POST["form_data"]["email"];
  $website = $_POST["form_data"]["website"];
  $message = $_POST["form_data"]["message"];

  $to = 'pavleristicblog@gmail.com'; 
  $subject = 'New message from ' . $name;
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  $headers = array(
    'From: ' . $email,
    'Reply-To: ' . $email,
  );

  if (wp_mail($to, $subject, $body, $headers)) {
    echo 'success';
  } else {
    echo 'error';
  }
  wp_die(); 
}


add_action('wp_ajax_pr_send_email', 'pr_send_email');
add_action('wp_ajax_nopriv_pr_send_email', 'pr_send_email');




<?php
  // register nav walker
  require_once('class-wp-bootstrap-navwalker.php');

  // theme support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

  // nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme','wpb_theme_setup');

  // lue lisää
  function set_excerpt_length(){
    return 45;
  }

  add_filter('excerpt_length', 'set_excerpt_length');



  // widgets
  function wpb_init_widgets($id){
    register_sidebar(array(
      'name'  => 'Sidebar',
      'id'    => 'sidebar',
      'before_widget' => '<div class="news">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

      register_sidebar(array(
        'name'  => 'AjankohtaistaSidebar',
        'id'    => 'ajankohtaista',
        'before_widget' => '<div class="news">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
      ));

    //tervetuloa -teksti
    register_sidebar(array(
        'name'  => 'EtusivuYlä',
        'id'    => 'box1',
        'before_widget' => '<div class="welcome">',
        'after_widget'  => '</div>',
        'before_title'  => '<blognote>',
        'after_title'   => '</blognote>'
      ));

    //eka boksi
    register_sidebar(array(
        'name'  => 'EtusivuEkaBoksi',
        'id'    => 'box2',
        'before_widget' => '<div class="news">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
      ));

    //toka/keskinmäinen
    register_sidebar(array(
        'name'  => 'EtusivuTokaBoksi',
        'id'    => 'box3',
        'before_widget' => '<div class="news">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
      ));

    //kolmas/oikee
    register_sidebar(array(
        'name'  => 'EtusivuKolmasBoksi',
        'id'    => 'box6',
        'before_widget' => '<div class="news">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
      ));

      //sininen
      register_sidebar(array(
          'name'  => 'EtusivuSininen',
          'id'    => 'box4',
          'before_widget' => '<div class="welcome2">',
          'after_widget'  => '</div>',
          'before_title'  => '<blognote>',
          'after_title'   => '</blognote>'
        ));

      //punanen
      register_sidebar(array(
          'name'  => 'EtusivuPunanen',
          'id'    => 'box5',
          'before_widget' => '<div class="welcome3">',
          'after_widget'  => '</div>',
          'before_title'  => '<blognote>',
          'after_title'   => '</blognote>'
        ));


  }

  add_action('widgets_init', 'wpb_init_widgets');

<?php 
// update_option( 'siteurl', 'http://vetanimals.by' );
// update_option( 'home', 'http://vetanimals.by' );
/**
 * все загружаемые стили и скрипты
**/

function load_style_script() {
    // wp_enqueue_script('jquery-1', 'http://code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_script('jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js');
    // wp_deregister_script('jquery');
    // wp_enqueue_script( 'jquery' );
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_script('jquery-mig', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
    // wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js');
    // wp_enqueue_script('javascript', get_template_directory_uri() . '/js/js.js');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}




add_action('wp_enqueue_scripts', 'load_style_script'); /** загружаем стили и скрипты **/

add_theme_support('post-thumbnails'); /** включаем поддержку миниатюр записей*/

/**register_nav_menu('menu', 'Меню'); */ /** включаем поддержку меню*/

add_action( 'after_setup_theme', function(){ /** включаем поддержку нескольких меню*/
	register_nav_menus( [
        'menu' => 'Меню в шапке',
        'sidebarmenu' => 'Меню услуг',
		'footer_menu' => 'Меню в подвале'
	] );
} );

register_sidebar(array( /** регистрируем сайдбар */
    'name' => 'Виджеты сайдбара', 
    'id' => 'sidebar', 
    'description' => 'Здесь размещайте виджеты сайдбара',
    'before_widget' => '<div class="vidget">',
    'after_widget' => '</div>'
    
)); 


register_sidebar(array( /** регистрируем футер */
    'name' => 'Виджеты футера', 
    'id' => 'footer', 
    'description' => 'Здесь размещайте виджеты футера',
    // 'before_widget' => '<div class="footer_top_services_wrap">',
    // 'after_widget' => '</div>'
    
)); 

add_action( 'init', 'services_slider' ); /** регистрируем услуги */
function services_slider() {
    register_post_type('slider', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-heart',
      'labels' => array(
          'name' => 'Услуги',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую услугу'
          
      )
    ));
}

add_action( 'init', 'news_slider' ); /** регистрируем акции */
function news_slider() {
    register_post_type('slider1', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-megaphone',
      'labels' => array(
          'name' => 'Новости',
          'all_items' => 'Все новости',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новость'
          
      )
    ));
}

add_action( 'init', 'patient_dogs' ); /** регистрируем пациентов */
function patient_dogs() {
    register_post_type('slider2', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-activity',
      'labels' => array(
          'name' => 'Пациенты собаки',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую публикацию'
          
      )
    ));
} 

add_action( 'init', 'specialist_slider' ); /** регистрируем специалистов */
function specialist_slider() {
    register_post_type('slider3', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor', 'custom-fields'),
      'menu_icon' => 'dashicons-businesswoman',
      'labels' => array(
          'name' => 'Специалисты',
          'all_items' => 'Все специалисты',
          'add_new' => 'Добавить нового',
          'add_new_item' => 'Добавить специалиста'
          
      )
    ));
}

add_action( 'init', 'articles_slider' ); /** регистрируем статьи */
function articles_slider() {
    register_post_type('slider4', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-images-alt',
      'labels' => array(
          'name' => 'Статьи',
          'all_items' => 'Все статьи',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую статью'
          
      )
    ));
}

add_action( 'init', 'servises_procedure_slider' ); 
function servises_procedure_slider() {
    register_post_type('slider5', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-editor-alignleft',
      'labels' => array(
          'name' => 'Процедурный',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_castrations_slider' );
function servises_castrations_slider() {
    register_post_type('slider6', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-minus',
      'labels' => array(
          'name' => 'Кастрация',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_surgery_slider' ); 
function servises_surgery_slider() {
    register_post_type('slider7', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-pressthis',
      'labels' => array(
          'name' => 'Хирургия',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_dermatology_slider' );
function servises_dermatology_slider() {
    register_post_type('slider8', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-carrot',
      'labels' => array(
          'name' => 'Дерматология',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_diagnostics_slider' ); 
function servises_diagnostics_slider() {
    register_post_type('slider9', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-dashboard',
      'labels' => array(
          'name' => 'Диагностика',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_gynecology_slider' ); 
function servises_gynecology_slider() {
    register_post_type('slider10', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-code-standards',
      'labels' => array(
          'name' => 'Гинекология',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_ophthalmology_slider' ); 
function servises_ophthalmology_slider() {
    register_post_type('slider11', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-visibility',
      'labels' => array(
          'name' => 'Офтальмология',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_dentistry_slider' ); 
function servises_dentistry_slider() {
    register_post_type('slider12', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-smiley',
      'labels' => array(
          'name' => 'Стоматология',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'servises_euthanasia_slider' ); 
function servises_euthanasia_slider() {
    register_post_type('slider13', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-thumbs-down',
      'labels' => array(
          'name' => 'Эвтаназия',
          'all_items' => 'Все услуги',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новое описание услуги'
          
      )
    ));
}

add_action( 'init', 'patient_cats' ); /** регистрируем пациентов */
function patient_cats() {
    register_post_type('slider14', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-activity',
      'labels' => array(
          'name' => 'Пациенты кошки',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую публикацию'
          
      )
    ));
}

add_action( 'init', 'patient_reptiles' ); /** регистрируем пациентов */
function patient_reptiles() {
    register_post_type('slider15', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-activity',
      'labels' => array(
          'name' => 'Пациенты рептилии',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую публикацию'
          
      )
    ));
}

add_action( 'init', 'patient_birds' ); /** регистрируем пациентов */
function patient_birds() {
    register_post_type('slider16', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-activity',
      'labels' => array(
          'name' => 'Пациенты птицы',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую публикацию'
          
      )
    ));
}  

add_action( 'init', 'patient_exotic' ); /** регистрируем пациентов */
function patient_exotic() {
    register_post_type('slider17', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-activity',
      'labels' => array(
          'name' => 'Пациенты экзотика',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую публикацию'
          
      )
    ));
}  

add_action( 'init', 'patient_rodents' ); /** регистрируем пациентов */
function patient_rodents() {
    register_post_type('slider18', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-activity',
      'labels' => array(
          'name' => 'Пациенты грызуны',
          'all_items' => 'Все публикации',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую публикацию'
          
      )
    ));
} 


add_action( 'init', 'about_news' ); /** регистрируем пациентов */
function about_news() {
    register_post_type('slider19', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-testimonial',
      'labels' => array(
          'name' => 'Новости клиники',
          'all_items' => 'Все новости',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую новость'
          
      )
    ));
} 

function new_excerpt_length($length) {
    return 20;
    }

add_filter('excerpt_length', 'new_excerpt_length');

?>
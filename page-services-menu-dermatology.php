<?php 
/*
 * Template Name: Дерматология
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="presentation-title"><?php the_title() ?></div>
</div>



<div class="container">
    <div class="services-menu">
        <?php wp_nav_menu(array('theme_location' => 'sidebarmenu')); ?> 
        
        <div class="services-content">

            <div class="services-content_header">
                В нашей ветеринарной клинике вы можете пройти любые лечебно-профилактические процедуры по назначению врачей.<br>
                <br>
                Все манипуляции производятся одноразовыми инструментами, строго соблюдая все правила асептики.
            </div>

            <div class="services-content_menu">
                <button class="services-content_menu_btn active" id="description_btn">Описание услуг</button></li>
                <button class="services-content_menu_btn" id="price_btn">Цены</button>
            </div>

            <div class="services-content_wrapper" id="content"> 

               <?php $slider8 = new WP_Query(array('post_type' => 'slider8'));?>     
                    <?php if( $slider8->have_posts() ) : ?>                        
                        <?php while ( $slider8->have_posts() ) : $slider8->the_post(); ?>   
                            <div class="services-content_wrapper_item"> 
                                <div class="services-content_wrapper_item_title"><?php the_title(); ?></div>
                                <?php the_post_thumbnail('full'); ?>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>           
                    <?php else: ?>
                        <p>Место под слайдер</p>
                    <?php endif; ?>
                        <?php wp_reset_query()?>            
                      
            </div>            

            <div class="services-content_table" id="table">
                <?php the_content(); ?>
            </div>

                    
            

        </div>

    </div>

    
</div>

             

<section class="promo">
    <div class="container">
        <div class="promo_wrapper">

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/patient.jpg" alt="patient"></div>
                <div class="promo_title">От собаки до хомячка</div>
                <div class="promo_descr">Мы принимаем любых пациентов, даже самых экзотических</div>
                <button class="promo_btn"><a href="http://animals/patients/">Пациенты</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/pharmacy.jpg" alt="pharmacy"></div>
                <div class="promo_title">Работает ветаптека</div>
                <div class="promo_descr">Купить назначенные ветеринаром лекарства можно сразу же у нас</div>
                <button class="promo_btn"><a href="http://animals/pharmacies/">Адреса</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/equipment.jpg" alt="equipment"></div>
                <div class="promo_title">Современное оборудование</div>
                <div class="promo_descr">Наша ветклиника оснащена новым и современным оборудованием</div>
                <button class="promo_btn"><a href="http://animals/about/">О нас</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/certificate.jpg" alt="certificate"></div>
                <div class="promo_title">Квалифицированные врачи</div>
                <div class="promo_descr">Все ветеринарные врачи в нашей клинике имеют высокую квалификацию</div>
                <button class="promo_btn"><a href="http://animals/specialists/">Специалисты</a></button>
            </div>

    </div>
</section>
       

<?php get_footer();?>
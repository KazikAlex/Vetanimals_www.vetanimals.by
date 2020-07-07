<?php 

/*
 * Template Name: Специалисты
*/

?>

<?php get_header(); ?>

<div class="container">
    <div class="presentation-title"><?php the_title(); ?></div>
</div>

    
<?php $slider3 = new WP_Query(array('post_type' => 'slider3', 'posts_per_page' => 9));?>                
    <?php if( $slider3->have_posts() ) : ?> 
        <div class="container">
            <div class="specialists1-wrapper">
                <?php while ( $slider3->have_posts() ) : $slider3->the_post(); ?>    
                    <div class="block_carousel_item block_carousel_item_specialist">
                        <div class="block_carousel_item_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                        <div class="block_carousel_item_title"><?php the_title(); ?></div>
                        <div class="block_carousel_item_descr block_carousel_item_descr_specialists"><?php the_content(); ?></div>
                        
                    </div>
                <?php endwhile; ?>
            </div>  
        </div>     

        <div class='container'>
            <div class="pagination">
                <?php                       
                    $big = 999999999;
                    echo paginate_links( array(
                            'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format'  => ' ?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total'   => $slider3->max_num_pages,
                            'prev_next'    => False
                    ) );
                ?>
            </div>  
        </div>  
                        
                
<?php else: ?>
    <p>Место под слайдер</p>
<?php endif; ?>
<?php wp_reset_query()?>

<section class="promo">
    <div class="container">
        <div class="promo_wrapper">

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/patient.jpg" alt="patient"></div>
                <div class="promo_title">От собаки до хомячка</div>
                <div class="promo_descr">Мы принимаем любых пациентов, даже самых экзотических</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/patients/">Пациенты</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/pharmacy.jpg" alt="pharmacy"></div>
                <div class="promo_title">Работает ветаптека</div>
                <div class="promo_descr">Купить назначенные ветеринаром лекарства можно сразу же у нас</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/pharmacies/">Адреса</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/equipment.jpg" alt="equipment"></div>
                <div class="promo_title">Современное оборудование</div>
                <div class="promo_descr">Наша ветклиника оснащена новым и современным оборудованием</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/about/">О нас</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/certificate.jpg" alt="certificate"></div>
                <div class="promo_title">Квалифицированные врачи</div>
                <div class="promo_descr">Все ветеринарные врачи в нашей клинике имеют высокую квалификацию</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/specialists/">Специалисты</a></button>
            </div>

    </div>
</section>

<section class="registration">
    <div class="container">
        <form class="form">
            <div class="form_reg">
                <div class="form_title">Запись на прием</div>
                <label for="name">Имя*</label>
                <input id="name" type="text">
                <label for="tel">Телефон*</label>
                <input id="tel" type="tel">
                <label for="mail">E-mail*</label>
                <input id="mail" type="email">
                <div type="submit" id="subm">Записаться</div>
            </div>
            <div class="form_message">
                <div class="form_message_wrapper">
                    <label for="mess">Сообщение</label>
                    <textarea id="mess"></textarea>
                </div>
            </div>
        </form>
    </div>
</section>




<?php get_footer();?>

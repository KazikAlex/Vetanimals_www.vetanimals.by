<?php 

/*
 * Template Name: Услуги и цены
*/

?>

<?php get_header(); ?>

<div class="container">
    <div class="presentation-title"><?php the_title() ?></div>
</div>

    
<?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => 9));?>
        
<?php if( $slider->have_posts() ) : ?> 
    <div class="container">
        <div class="services1-wrapper">
            <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>       
                <div class="block_carousel_item">
                    <div><?php the_post_thumbnail('full'); ?></div>
                    <div class="block_carousel_item_title"><?php the_title(); ?></div>
                    <div class="block_carousel_item_descr"><?php the_content(); ?></div>
                    <button class="block_carousel_item_btn"><a href="<?php the_permalink(); ?>/services-menu/">Узнать больше</a></button>
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
                        'total'   => $slider->max_num_pages,
                        'prev_next' => False
                ) );
            ?>
        </div>  
    </div>   

            

<?php else: ?>
    <p>Место под слайдер</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
             

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

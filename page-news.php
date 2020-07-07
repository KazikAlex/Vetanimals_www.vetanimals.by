<?php 

/*
 * Template Name: Акции
*/

?>

<?php get_header(); ?>

    <div class="container">
        <div class="presentation-title"><?php the_title() ?></div>
    </div>   
    <?php wp_reset_query()?>
    <?php $slider1 = new WP_Query(array('post_type' => 'slider1'));?>     
        <?php if( $slider1->have_posts() ) : ?> 
            <div class="container">
                <div class="news1-wrapper">
                    <?php while ( $slider1->have_posts() ) : $slider1->the_post(); ?>    
                        <div class="block_carousel_item">
                            <div class="block_carousel_item_img"><?php the_post_thumbnail('full'); ?></div>
                            <div class="block_carousel_item_wrapper">
                                <div class="news_date"><?php the_time('d.m.Y'); ?></div>
                                <div class="block_carousel_item_title block_carousel_item_title_news"><?php the_title(); ?></div>
                                <div class="block_carousel_item_descr block_carousel_item_descr_news"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>">Читать далее</a>
                            </div>
                        </div>              
                    <?php endwhile; ?>
                </div>
            </div>

            <div class='container'>
                <div class="pagination">
                    <?php 
                        
                        $big = 999999999; // уникальное число для замены
                        echo paginate_links( array(
                                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format'  => ' ?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total'   => $slider1->max_num_pages,
                                'prev_next'    => False
                        ) );
                    ?>
                </div>  
            </div>  
                
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>
                <?php wp_reset_query()?>
            </div>
        




<?php get_footer();?>

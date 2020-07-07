<?php 

/*
 * Template Name: Статьи
*/

?>

<?php get_header(); ?>

    <div class="container">
        <div class="presentation-title"><?php the_title(); ?></div>
    </div>
   
<?php $slider4 = new WP_Query(array('post_type' => 'slider4', 'posts_per_page' => 9));?>
            <!-- , 'posts_per_page' => -1 -->                
    <?php if( $slider4->have_posts() ) : ?> 
        <div class="container">
            <div class="services1-wrapper">
                <?php while ( $slider4->have_posts() ) : $slider4->the_post(); ?>    
                    <div class="block_carousel_item">
                        <div class="block_carousel_item_img"><?php the_post_thumbnail('full') ?></div>
                        <div class="block_carousel_item_wrapper">
                            <div class="news_date"><?php the_time('d.m.Y'); ?></div>
                            <div class="block_carousel_item_title block_carousel_item_title_articlees"><?php the_title(); ?></div>
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
                        
                        $big = 999999999;
                        echo paginate_links( array(
                                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format'  => ' ?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total'   => $slider4->max_num_pages,
                                'prev_next'    => False
                        ) );
                    ?>
                </div>  
            </div>  
                
    <?php else: ?>
        <p>Место под слайдер</p>
    <?php endif; ?>
    

<?php get_footer();?>

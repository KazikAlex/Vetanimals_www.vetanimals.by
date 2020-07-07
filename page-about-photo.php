<?php 

/*
 * Template Name: Фотогалерея наших пациентов
*/
?>

<?php get_header(); ?>

<div class="container">
        <div class="presentation-title"><?php the_title(); ?></div>
        
        <?php if( have_posts() ) : while ( have_posts() ) : the_post();?>

            
                <?php the_content(); ?>

                    
        <?php endwhile; ?>

        <?php else: ?>
        <?php endif; ?>   

    </div>


<?php get_footer();?>
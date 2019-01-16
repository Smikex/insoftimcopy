<?php

/*
Template Name: Vacancy Loop (Archive)
*/


?>
    
    <?php //$page = get_page_by_title( 'Вакансии' ); 
//    $content = $page->post_content;
//    $title =  $page->post_title;
//    $content = apply_filters( 'the_content', $content );
    $content= get_the_content();
    $content = str_replace( ']]>', ']]&gt;', $content ); ?>

   
<?php get_header(); ?>    
<?php get_template_part( 'title' ); ?>
<?php //qode_startit_get_title($page->ID); ?>
<?php //get_template_part('slider'); ?>

<div class="qodef-container vacancy-container">
<div class="qodef-container-inner">
	
		
			 
			<?php do_action('qode_startit_page_after_content'); ?>
			<div class="qodef-two-columns-75-25 qodef-content-has-sidebar  clearfix">
				<div class="qodef-column1 qodef-content-left-from-sidebar">
					<div class="qodef-column-inner">
                     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <!--<h2><?php //the_title(); ?></h2>-->
						<?php the_content(); ?>
                       <div class="vacancy-form"><?php dynamic_sidebar( 'vacancy_sidebar' ); ?></div>
					</div>
				</div>
                    
				<?php endwhile; ?>
               <?php endif; ?>
				<div class="qodef-column2">
                  
                  <div class="qodef-column-inner">
                    <aside class="qodef-sidebar">
                      <div class="widget">
					<h4><?php echo __('Актуальные вакансии:'); ?></h4>	
                  <?php
                        $loop = new WP_Query( array( 'post_type' => 'vacancy', 'ignore_sticky_posts' => 1, 'paged' => false ) );
                        
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="available-vacancy"> 
                                  <li class="qodef-blog-list-item">
                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                  </li>
                                </div>
                            <?php endwhile; else: ?>
                                <div class="available-vacancy"><p><?php echo __('Актуальных вакансий нет'); ?></p> </div>
                        <?php endif;
                        wp_reset_postdata();
                        ?> 
                      </div>
                    </aside> 
					</div>
                  
				</div>
			</div>
 
		
		
	
</div>
</div>
<?php get_footer(); ?>
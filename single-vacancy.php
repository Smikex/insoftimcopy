<?php
/**
 * The template for displaying single vacancy.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package StartIt
 */

?>
     
<?php get_header(); ?>    
<?php get_template_part( 'title' ); ?>
<?php //get_template_part('slider'); ?>

<div class="qodef-container">
<div class="qodef-container-inner">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php $vacancyID = get_the_ID(); ?>
        
			 
			<?php do_action('qode_startit_page_after_content'); ?>
			<div class="qodef-two-columns-75-25 qodef-content-has-sidebar  clearfix">
				<div class="qodef-column1 qodef-content-left-from-sidebar">
					<div class="qodef-column-inner">
                      <h2><?php echo get_the_title(); ?></h2>
						<?php the_content();  ?>
                       <div class="vacancy-form"><?php dynamic_sidebar( 'vacancy_sidebar' ); ?></div>
					</div>    
				</div>
              
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
                                  <?php $temp = get_the_ID(); ?>
                                        <a <?php if($vacancyID == $temp){echo "class='active'";} ?> href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                  </li>
                                </div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?> 
                      </div>
                    </aside> 
                   </div>
                  
				</div>
			</div>
  
            <?php endwhile; ?>
			<?php endif; ?>
 
		
		
	
</div>
</div>
<?php get_footer(); ?>
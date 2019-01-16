<?php $sidebar = qode_startit_sidebar_layout(); ?>
<?php get_header(); ?>
	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>
	<div class="qodef-container">
		<?php do_action('qode_startit_after_container_open'); ?>
		<div class="qodef-container-inner clearfix">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(($sidebar == 'default')||($sidebar == '')) : ?>
					<?php the_content(); ?>
					<?php do_action('qode_startit_page_after_content'); ?>
				<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
					<div <?php echo qode_startit_sidebar_columns_class(); ?>>
						<div class="qodef-column1 qodef-content-left-from-sidebar">
							<div class="qodef-column-inner">
								<?php the_content(); ?>
								<?php do_action('qode_startit_page_after_content'); ?>
							</div>
						</div>
						<div class="qodef-column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
					<div <?php echo qode_startit_sidebar_columns_class(); ?>>
						<div class="qodef-column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="qodef-column2 qodef-content-right-from-sidebar">
							<div class="qodef-column-inner">
								<?php the_content(); ?>
								<?php do_action('qode_startit_page_after_content'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php do_action('qode_startit_before_container_close'); ?>
	</div>

<?php /*findme link to services*/

if ($post->post_parent) {
    
   if (get_the_title($post->post_parent) == 'Услуги'){ ?>
       
    <div class='contactHolder'>
        <a href="<?php echo site_url(); ?>/services/" target="_self" class="qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-icon">
                <span class="qodef-btn-text"><?php _e('Все услуги', 'startit'); ?></span>
            <span class="qodef-btn-text-icon"><i class="qodef-icon-simple-line-icon icon-rocket "></i></span>
        </a>
    </div>
    
   <?php }
}
?>

<?php get_footer(); ?>
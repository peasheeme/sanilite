<?php 
/**
 * The template for displaying Category posts
 *
 * @package WordPress
 * @subpackage weblizar
 */
get_header(); ?>
<div class="top-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 page-info">
                <h1 class="h1-page-title"><?php the_archive_title("", false); ?></h1>				
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>	
<div class="content-wrapper">
	<div class="body-wrapper">
		<div class="container">	
			<div class="row ">		
				<!--Blog Content-->
				<div class="col-md-9 col-sm-9"><h1></h1><?php
				while(have_posts()):the_post();
				$more = 0;  
				get_template_part( 'content', get_post_format() );		
				endwhile; ?>		
					<div class="pagination"><?php 
						if ( get_next_posts_link() ): 
						next_posts_link('<span class="prev">&larr;</span>'.__('Publicaciones Antiguas', 'weblizar' ) ); 
						endif;
						
						if ( get_previous_posts_link() ): 
						previous_posts_link( __( 'Publicaciones recientes', 'weblizar' ). '<span class="next">&rarr;</span>' ); 
						endif; ?>
					</div>
				</div>	
				<?php wp_link_pages(); ?>	
				<!--/Blog Content-->
				<?php get_sidebar(); ?>			
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<?php 
/**
 * The template for displaying Author Post
 *
 * @package WordPress
 * @subpackage weblizar
 */
get_header(); ?>
<div class="top-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 page-info">
				<?php /* translators: %s: author name */ ?>
                <h1 class="h1-page-title"><?php printf( esc_html_e( 'Archivos de autor: %s', 'weblizar' ), get_the_author() ); ?></h1>				
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>	
<div class="content-wrapper"><div class="body-wrapper">
    <div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9">
			<h1></h1>
			<?php while(have_posts()):the_post();
					$more = 0;
					get_template_part( 'content', get_post_format() );
					endwhile; ?>				 
				<div class="pagination"><?php
					if ( get_next_posts_link() ):
					next_posts_link('<span class="prev">&larr;</span>'.__('Publicaciones antiguas', 'weblizar' ) );
					endif;
					
					if ( get_previous_posts_link() ): 
					previous_posts_link( __( 'Publicaciones recientes', 'weblizar' ). '<span class="next">&rarr;</span>' ); 
					endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<?php 
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage weblizar
 */
get_header(); ?>
<div class="top-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 page-info">
			<?php /* translators: %s: search item */ ?>
                <h1 class="h1-page-title"><?php printf( esc_html_e( 'Busacar resultados: %s', 'weblizar' ), '<span>' . get_search_query() . '</span>' ); ?></h1>				
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>	
<div class="content-wrapper">
	<div class="body-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
						<!-- Blog Post -->
						<div class="blog-post">
							
							<?php if ( have_posts() ) : 
							while(have_posts()): the_post(); ?>							
							<div class="blog-span"><?php /* Start the Loop */ ?>			
								<?php get_template_part( 'content', get_post_format() ); ?>
								<div class="space-sep20"></div>
							</div>
							<?php endwhile; 
							else : ?>
							<div class="blog-span">	
							<header class="entry-header">
								<h1 class="entry-title"><?php esc_html_e( 'No se engonctró nada', 'weblizar' ); ?></h1>
							</header>

							<div class="entry-content">
								<p><?php esc_html_e( 'Lo sentimos, pero nada coincide con sus criterios de búsqueda. Por favor, intente de nuevo con algunas palabras clave diferentes.', 'weblizar' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
							</div>
						<?php endif; ?>
						</div>
				</div>   
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
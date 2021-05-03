<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-span">
		<?php if(has_post_thumbnail()): ?>
		<div class="blog-post-featured-img img-overlay">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>						
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wl_media_blog_img', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>
		<?php if(!is_page()) { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
		<div class="blog-post-details">			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="fa fa-calendar-times-o"></i>
				<a href="#">
					<?php echo get_the_date('d M y'); ?> 
				</a>
			</div>
			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="fa fa-user"></i>
				<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php echo get_the_author(); ?></a>
			</div>
			
			<?php if(get_the_tag_list() != '') { ?>
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="icon-tags"></i><?php the_tags('', ', ', '<br />'); ?>									
			</div>
			<?php } ?>
			
			<div class="blog-post-details-item blog-post-details-item-left">
				<i class="fa fa-comments-o"></i>
				
					<?php comments_number( 'Ningun comentario', 'Un comentario', '% comments' ); ?>
				
			</div>			
		</div>
		<?php } ?>
		<div class="space-sep20"></div>
		<div class="blog-post-body"><?php the_content( __( 'Leér más' , 'weblizar' ) ); ?>
		<?php $defaults = array(
		'before'           => '<div class="pagination">' . __( 'Páginas:','weblizar' ),
		'after'            => '</div>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Página Siguiente','weblizar' ),
		'previouspagelink' => __( 'Página anterior','weblizar' ),
		'pagelink'         => '%',
		'echo'             => 1
		);
		wp_link_pages( $defaults );
		?>
		</div>
		
	</div>
</div>
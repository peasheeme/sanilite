<?php
/**
 * Prints an accessibility-friendly link to edit a post or page.
 *
 * This also gives us a little context about what exactly we're editing
 * (post or page?) so that users understand a bit more where they are in terms
 * of the template hierarchy and their content. Helpful when/if the single-page
 * layout with multiple posts/pages shown gets confusing.
 *
 * @since Multiple Business 1.0.0
 * @return void
 */
if ( ! function_exists( 'multiple_business_edit_link' ) ) :

function multiple_business_edit_link( $echo = true ) {

	if( ! $echo ){
		ob_start();
	}

	edit_post_link(
		sprintf(
			# translators: %s: Name of current post
			__( 'EDIT<span class="screen-reader-text"> "%s"</span>', 'multiple-business' ),
			get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
	);

	if( ! $echo ){
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
}
endif;

/**
 * Prints Author's name with a link, posted date and number of Total Comments.
 *
 * @since  Multiple Business 1.0.0
 * @return void
 */

if ( ! function_exists( 'multiple_business_entry_footer' ) ) :
	
	function multiple_business_entry_footer() {

		# Get the author name; wrap it in a link.
		?>
		<footer class="post-footer">
            <div class="detail">

            	<!-- Hide this section in single page  -->
            	<?php ! is_single() && ! is_author() ? multiple_business_posted_by() : '' ; ?>
				
				<?php multiple_business_time_link(); ?>
				
				<span class="comment-link">
					<a href="<?php comments_link(); ?>">

						<?php printf( esc_html( '%d' ), absint( wp_count_comments( get_the_ID() )->approved ) );?>
					</a>
				</span>

				<?php if( is_single() && 'post' == get_post_type() ): ?>

					<?php if( get_the_tag_list() ): ?>
						<span class="divider">/</span>
						<span class="tag-links">
							<span class="screen-reader-text">
								<?php echo esc_html__( 'Tags', 'multiple-business' ); ?>
							</span>
							<?php echo get_the_tag_list( '', ', ' ); ?>
						</span>
					<?php endif; ?>

				<?php endif; ?>
				<?php if( get_the_category_list() ): ?>
					<span class="cat-links">
						<span class="screen-reader-text">
							<?php echo esc_html__( 'Categories', 'multiple-business' ); ?>
						</span>
						<?php echo get_the_category_list( ' ' ); ?>
					</span>
				<?php endif; ?>
			</div>
		</footer>
	<?php
	}
endif;

/**
 * Prints Posts title with link, edit link and a category
 *
 * @since  Multiple Business 1.0.0
 * @uses   multiple_business_edit_link()
 * @return void
 */
if ( ! function_exists( 'multiple_business_entry_header' ) ) :

function multiple_business_entry_header() {

	if( ! is_single() ){ 
		$cat = multiple_business_get_the_category();
		$edit_link = '';
			if( get_edit_post_link()){
				$edit_link = multiple_business_edit_link( false );
		}
	?>
		<header class="post-title">
			<?php if ( ! empty( $cat ) ): ?>
				<span class="cat">
					<?php
					echo sprintf( '<a href="%s" >%s</a>',
							esc_url( get_category_link( $cat[ 0 ]->term_id ) ),
							esc_html( $cat[ 0 ]->name )
						);
					echo $edit_link;
					?>
				</span>
			<?php endif; ?>
			<?php
			if( 'post' == get_post_type() )
				$edit_link = '';

			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' . $edit_link . '</h2>' );
			?>
		</header>
<?php
	}
}
endif;

/**
 * Prints HTML with author avatar, name.
 * 
 *  @since Multiple Business 1.0.0
 *  @uses multiple_business_time_link();
 *  @return void
 */
if ( ! function_exists( 'multiple_business_posted_on' ) ) :

function multiple_business_posted_by() {
?>
	<span class="author">
	    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
	        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
	    </a>
	</span>
	<span class="author-name">
		<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
			<?php echo get_the_author(); ?>
		</a>
	</span>
	<span class="divider">/</span>
<?php
}
endif;

/**
 * Gets a nicely formatted string for the published date.
 *
 * @since Multiple Business 1.0.0
 * @return string
 */
if ( ! function_exists( 'multiple_business_time_link' ) ) :

function multiple_business_time_link() {

	$time_string = '<span class="entry-date published updated" datetime="%1$s">%2$s</span>';

	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<span class="entry-date published" datetime="%1$s">%2$s</span><span class="updated" datetime="%3$s">%4$s</span>';
	}
	
	$time_string = sprintf( $time_string,
		get_the_date( DATE_W3C ),
		get_the_date(),
		get_the_modified_date( DATE_W3C ),
		get_the_modified_date()
	);
?>
	<span class="screen-reader-text"><?php echo esc_html__( 'Posted on', 'multiple-business' ); ?></span>
	<span class="posted-on">
		<a href="<?php echo esc_url( multiple_business_get_day_link() ); ?>" rel="bookmark">
			<?php echo $time_string; ?>
		</a>
	</span>
	<span class="divider">/</span>
	<?php		
}
endif;

if( !function_exists( 'multiple_business_get_day_link' ) ):
/**
* Returns the permalink of Post day
*
* @since Multiple Business 1.0.0
* @return url
*/
function multiple_business_get_day_link(){
	return get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d') );
}
endif;

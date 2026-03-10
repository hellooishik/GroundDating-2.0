<?php
/**
 * The template for displaying all single posts
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-single-post" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-8)); padding-bottom: var(--gd-space-16);">
	<div class="gd-container" style="max-width: 800px;">

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<header class="entry-header text-center gd-fade-in" style="margin-bottom: var(--gd-space-8);">
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<span class="text-primary" style="font-size: 0.9rem; font-weight: 600; text-transform: uppercase;">' . esc_html( $categories[0]->name ) . '</span>';
                    }
                    ?>
					<?php the_title( '<h1 class="entry-title" style="margin-top: 12px; margin-bottom: 24px; font-size: clamp(2rem, 4vw, 3rem);">', '</h1>' ); ?>

					<div class="entry-meta text-muted" style="font-size: 0.95rem;">
						<span>By <?php the_author(); ?></span> &bull; 
						<span><?php echo get_the_date(); ?></span>
					</div>
				</header><!-- .entry-header -->
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail gd-fade-in" style="margin-bottom: var(--gd-space-8); border-radius: 16px; overflow: hidden; box-shadow: var(--gd-shadow-md);">
                        <?php the_post_thumbnail('full', array('style' => 'width:100%; height:auto; display:block;')); ?>
                    </div>
                <?php endif; ?>

				<div class="entry-content gd-fade-in" style="font-size: 1.1rem; line-height: 1.8;">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'grounded-dating' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grounded-dating' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer" style="margin-top: var(--gd-space-12); padding-top: var(--gd-space-6); border-top: 1px solid var(--gd-border-color);">
					<div class="d-flex align-center justify-between">
                        <div class="d-flex gap-4">
                            <!-- Share buttons could go here -->
                            <span class="text-muted" style="font-size: 0.9rem;">Share this article</span>
                        </div>
                        <?php
                        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'grounded-dating' ) );
                        if ( $tags_list ) {
                            /* translators: 1: list of tags. */
                            printf( '<span class="tags-links" style="font-size: 0.9rem;">' . esc_html__( 'Tagged: %1$s', 'grounded-dating' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        }
                        ?>
                    </div>
				</footer><!-- .entry-footer -->
                
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle text-muted" style="display:block; font-size:0.85rem;">' . esc_html__( 'Previous:', 'grounded-dating' ) . '</span> <span class="nav-title" style="font-weight:600; color:var(--gd-text-heading);">&larr; %title</span>',
					'next_text' => '<span class="nav-subtitle text-muted" style="display:block; font-size:0.85rem; text-align:right;">' . esc_html__( 'Next:', 'grounded-dating' ) . '</span> <span class="nav-title" style="font-weight:600; color:var(--gd-text-heading);">%title &rarr;</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- .gd-container -->
</main><!-- #main -->

<?php
get_footer();

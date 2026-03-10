<?php
/**
 * The template for displaying archive pages and blog home
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-blog" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-8)); padding-bottom: var(--gd-space-16);">
    <div class="gd-container">
        
        <header class="page-header text-center gd-fade-in" style="margin-bottom: var(--gd-space-12);">
            <?php
            if ( is_home() && ! is_front_page() ) {
                echo '<h1 class="page-title">Blog & Stories</h1>';
                echo '<p class="text-muted">Advice, success stories, and updates from the team.</p>';
            } else {
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
            }
            ?>
        </header>

        <div class="gd-posts-grid d-flex gap-8" style="flex-wrap: wrap;">
            <?php
            if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('gd-card gd-fade-in'); ?> style="flex: 1 1 300px; max-width: 400px; padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail" style="height: 200px; overflow: hidden;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', array('style' => 'width:100%; height:100%; object-fit:cover;')); ?>
                                </a>
                            </div>
                        <?php else : ?>
                            <div class="post-thumbnail-placeholder" style="height: 200px; background: linear-gradient(135deg, var(--gd-bg-subtle), var(--gd-primary-light));"></div>
                        <?php endif; ?>

                        <div class="post-content-wrap" style="padding: var(--gd-space-6); flex: 1; display: flex; flex-direction: column;">
                            <header class="entry-header" style="margin-bottom: var(--gd-space-4);">
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo '<span class="text-primary" style="font-size: 0.85rem; font-weight: 600; text-transform: uppercase;">' . esc_html( $categories[0]->name ) . '</span>';
                                }
                                the_title( '<h2 class="entry-title" style="margin-top: 8px; margin-bottom: 0; font-size: 1.5rem;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                ?>
                            </header>

                            <div class="entry-summary text-muted" style="flex: 1;">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div style="margin-top: var(--gd-space-4); padding-top: var(--gd-space-4); border-top: 1px solid var(--gd-border-color); font-size: 0.85rem;" class="text-muted d-flex justify-between">
                                <span><?php echo get_the_date(); ?></span>
                                <a href="<?php the_permalink(); ?>" class="text-heading" style="font-weight: 600;">Read More &rarr;</a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                
                // Pagination wrapper
                echo '<div class="gd-pagination" style="width: 100%; margin-top: var(--gd-space-8); display: flex; justify-content: center;">';
                the_posts_navigation(array(
                    'prev_text' => '&larr; Older Posts',
                    'next_text' => 'Newer Posts &rarr;'
                ));
                echo '</div>';

            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();

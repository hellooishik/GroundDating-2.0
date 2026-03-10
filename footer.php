<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GroundedDating
 */

?>

	<footer id="colophon" class="site-footer gd-footer">
		<div class="gd-container">
            <div class="gd-footer-grid">
                
                <div class="gd-footer-brand">
                    <?php if ( has_custom_logo() ) : 
                        the_custom_logo();
                    else: ?>
                        <h3 class="gd-logo"><?php bloginfo( 'name' ); ?></h3>
                    <?php endif; ?>
                    <p class="gd-footer-desc text-muted">Building authentic relationships based on shared values and real locations.</p>
                </div>

                <div class="gd-footer-links">
                    <h4 class="gd-footer-title">Platform</h4>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'fallback_cb'    => false,
                        ) );
                    ?>
                </div>

                <div class="gd-footer-links">
                    <h4 class="gd-footer-title">Trust & Safety</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/safety')); ?>">Safety Center</a></li>
                        <li><a href="<?php echo esc_url(home_url('/guidelines')); ?>">Community Guidelines</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy')); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terms')); ?>">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="gd-footer-newsletter">
                    <h4 class="gd-footer-title">Stay Connected</h4>
                    <p class="text-muted">Get dating tips and updates straight to your inbox.</p>
                    <form class="gd-newsletter-form d-flex">
                        <input type="email" placeholder="Your email address" required class="gd-input">
                        <button type="submit" class="gd-btn gd-btn-primary">Subscribe</button>
                    </form>
                    
                    <div class="gd-social-links d-flex gap-4">
                        <a href="#" aria-label="Instagram" class="gd-social-icon text-muted">IG</a>
                        <a href="#" aria-label="Facebook" class="gd-social-icon text-muted">FB</a>
                        <a href="#" aria-label="Twitter" class="gd-social-icon text-muted">TW</a>
                        <a href="#" aria-label="TikTok" class="gd-social-icon text-muted">TK</a>
                    </div>
                </div>

            </div><!-- .gd-footer-grid -->
            
            <div class="gd-footer-bottom d-flex justify-between align-center">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
                <div class="gd-trust-badges d-flex gap-4">
                    <span class="gd-badge">🔒 Secure Platform</span>
                    <span class="gd-badge">✅ Verified Profiles</span>
                </div>
            </div>

		</div><!-- .gd-container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

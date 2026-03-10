<?php
/**
 * Template Name: Register Page
 *
 * @package GroundedDating
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
    <style>
        .gd-auth-layout { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: var(--gd-bg-subtle); padding: var(--gd-space-4); }
        .gd-auth-card { max-width: 450px; width: 100%; text-align: center; }
        .gd-auth-logo { font-size: 2rem; color: var(--gd-primary); font-weight: bold; margin-bottom: var(--gd-space-6); display: block; }
    </style>
</head>

<body <?php body_class(); ?>>

<main class="gd-auth-layout">
    <div class="gd-card gd-auth-card gd-fade-in">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="gd-auth-logo"><?php bloginfo('name'); ?></a>
        <h2>Start Your Journey</h2>
        <p class="text-muted" style="margin-bottom: var(--gd-space-6);">Create an account to discover authentic local matches.</p>
        
        <form class="gd-auth-form d-flex flex-col gap-4 text-left">
            <div>
                <label for="user_email" class="gd-label" style="display:block; margin-bottom: 8px;">Email Address</label>
                <input type="email" id="user_email" class="gd-input" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
            </div>
            <div>
                <label for="user_pass" class="gd-label" style="display:block; margin-bottom: 8px;">Create Password</label>
                <input type="password" id="user_pass" class="gd-input" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
            </div>
            
            <label class="d-flex align-center gap-2" style="font-size: 0.85rem; margin-top: 8px; cursor: pointer;">
                <input type="checkbox" required> I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.
            </label>
            
            <button type="submit" class="gd-btn gd-btn-primary" style="width: 100%; margin-top: 8px;">Create Account</button>
            
            <p class="text-center" style="margin-top: var(--gd-space-4); font-size: 0.9rem;">
                Already have an account? <a href="<?php echo esc_url( wp_login_url() ); ?>">Log In</a>
            </p>
        </form>
    </div>
</main>

<?php wp_footer(); ?>
</body>
</html>

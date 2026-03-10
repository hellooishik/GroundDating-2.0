<?php
/**
 * Template Name: Membership Pricing
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-page-pricing">
    
    <section class="gd-hero-page gd-section text-center" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-16)); padding-bottom: var(--gd-space-12);">
        <div class="gd-container gd-fade-in">
            <h1>Invest in Your Connections</h1>
            <p class="text-muted" style="max-width: 600px; margin: 0 auto;">Select the membership plan that fits your journey towards finding a meaningful relationship.</p>
        </div>
    </section>

    <!-- Pricing Grid reused from homepage logic -->
    <section class="gd-pricing gd-section" style="padding-top: 0;">
        <div class="gd-container">
            <div class="gd-pricing-grid d-flex gap-8 justify-center align-center gd-fade-in" style="flex-wrap: wrap; align-items: stretch;">
                
                <!-- Free Plan -->
                <div class="gd-card gd-pricing-card text-center" style="flex: 1 1 300px; max-width: 350px;">
                    <h3>Free</h3>
                    <div class="gd-price text-primary" style="margin: var(--gd-space-4) 0;"><h4 style="font-size: 2.5rem;">$0<span class="text-muted" style="font-size: 1rem;"> /mo</span></h4></div>
                    <ul class="gd-pricing-features" style="list-style:none; padding:0; margin: 0 0 var(--gd-space-6); flex-grow: 1;">
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">Basic Profile Setup</li>
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">Limited local matches</li>
                        <li style="padding: var(--gd-space-2) 0;">1 chat initiation per week</li>
                    </ul>
                    <a href="#" class="gd-btn gd-btn-outline">Current Plan</a>
                </div>

                <!-- Premium (Highlighted) Plan -->
                <div class="gd-card gd-pricing-card text-center" style="flex: 1 1 300px; max-width: 350px; border-color: var(--gd-primary); transform: scale(1.05); box-shadow: var(--gd-shadow-glow); background: var(--gd-bg-card); position: relative; z-index: 10;">
                    <div class="gd-popular-badge" style="background: var(--gd-primary); color: white; padding: 4px 12px; border-radius: 999px; font-size: 0.8rem; display: inline-block; margin-bottom: 1rem;">Most Popular</div>
                    <h3>Premium</h3>
                    <div class="gd-price text-primary" style="margin: var(--gd-space-4) 0;"><h4 style="font-size: 2.5rem;">$29.99<span class="text-muted" style="font-size: 1rem;"> /mo</span></h4></div>
                    <ul class="gd-pricing-features" style="list-style:none; padding:0; margin: 0 0 var(--gd-space-6); flex-grow: 1;">
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">Unlimited Swipes</li>
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">See Who Likes You</li>
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">Unlimited Chat Initiations</li>
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">Read Receipts</li>
                        <li style="padding: var(--gd-space-2) 0;">Travel Mode</li>
                    </ul>
                    <a href="#" class="gd-btn gd-btn-primary">Upgrade Now</a>
                </div>

                <!-- Plus Plan -->
                <div class="gd-card gd-pricing-card text-center" style="flex: 1 1 300px; max-width: 350px;">
                    <h3>Plus</h3>
                    <div class="gd-price text-primary" style="margin: var(--gd-space-4) 0;"><h4 style="font-size: 2.5rem;">$14.99<span class="text-muted" style="font-size: 1rem;"> /mo</span></h4></div>
                    <ul class="gd-pricing-features" style="list-style:none; padding:0; margin: 0 0 var(--gd-space-6); flex-grow: 1;">
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">Unlimited Swipes</li>
                        <li style="padding: var(--gd-space-2) 0; border-bottom: 1px solid var(--gd-border-color);">See Who Likes You</li>
                        <li style="padding: var(--gd-space-2) 0;">5 chat initiations per week</li>
                    </ul>
                    <a href="#" class="gd-btn gd-btn-outline">Choose Plus</a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();

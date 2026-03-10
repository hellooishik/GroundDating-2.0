<?php
/**
 * Template Name: About Page
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-page-about">

    <section class="gd-hero-page gd-section text-center" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-16)); padding-bottom: var(--gd-space-12); background-color: var(--gd-bg-subtle);">
        <div class="gd-container gd-fade-in">
            <h1>About GroundedDating</h1>
            <p class="text-muted" style="max-width: 600px; margin: 0 auto;">We believe in building authentic relationships based on shared values and real locations. No gimmicks, just genuine connections.</p>
        </div>
    </section>

    <section class="gd-section">
        <div class="gd-container">
            <div class="d-flex align-center gap-8 justify-between flex-col" style="flex-direction: row;">
                
                <div style="flex: 1;" class="gd-fade-in">
                    <h2>Our Mission</h2>
                    <p>Dating has become too fast and too shallow. GroundedDating is designed to slow things down. We prioritize meaningful interactions over endless swiping.</p>
                    <p>Our platform uses smart location-aware algorithms to connect you with people who not only share your interests but actually cross paths with you in the real world.</p>
                </div>
                
                <div style="flex: 1;" class="gd-fade-in">
                    <div style="width: 100%; height: 350px; background: linear-gradient(135deg, var(--gd-primary-light), var(--gd-bg-subtle)); border-radius: 16px;"></div>
                </div>
                
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

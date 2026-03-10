<?php
/**
 * The template for displaying the front page
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="gd-hero gd-section">
        <div class="gd-container">
            <div class="gd-hero-inner gd-fade-in d-flex align-center justify-between">
                
                <!-- Left Side: Copy & CTA -->
                <div class="gd-hero-content">
                    <h1 class="gd-hero-headline">Find Real Connections Anywhere on Earth</h1>
                    <p class="gd-hero-subhead text-muted">
                        GroundedDating helps people build authentic relationships based on shared values and real locations.
                    </p>
                    <div class="gd-hero-actions d-flex gap-4">
                        <a href="<?php echo esc_url( wp_registration_url() ); ?>" class="gd-btn gd-btn-primary">Join Now</a>
                        <a href="#featured-profiles" class="gd-btn gd-btn-outline">Explore Matches</a>
                    </div>
                </div>

                <!-- Right Side: 3D Globe -->
                <div class="gd-hero-visual">
                    <div id="gd-globe-container"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURED PROFILES SECTION -->
    <section id="featured-profiles" class="gd-profiles gd-section">
        <div class="gd-container">
            <div class="text-center gd-section-header gd-fade-in">
                <h2>Featured Profiles</h2>
                <p class="text-muted">Meet people who are looking for the same things you are.</p>
            </div>

            <div class="gd-profiles-grid d-flex gap-8 justify-center gd-fade-in">
                <!-- Example Profile Card 1 -->
                <article class="gd-card gd-profile-card">
                    <div class="gd-profile-image-wrapper">
                        <!-- Placeholder Image -->
                        <div class="gd-img-placeholder"></div>
                        <span class="gd-match-badge">98% Match</span>
                    </div>
                    <div class="gd-profile-info">
                        <h3>Sarah, 29</h3>
                        <p class="gd-location text-muted">📍 London, UK</p>
                        <p class="gd-bio">Coffee enthusiast, loves hiking and deep conversations over dinner.</p>
                    </div>
                </article>

                <!-- Example Profile Card 2 -->
                <article class="gd-card gd-profile-card">
                    <div class="gd-profile-image-wrapper">
                        <!-- Placeholder Image -->
                        <div class="gd-img-placeholder"></div>
                        <span class="gd-match-badge">94% Match</span>
                    </div>
                    <div class="gd-profile-info">
                        <h3>David, 32</h3>
                        <p class="gd-location text-muted">📍 New York, USA</p>
                        <p class="gd-bio">Photographer. Always looking for the next creative adventure.</p>
                    </div>
                </article>

                <!-- Example Profile Card 3 -->
                <article class="gd-card gd-profile-card">
                    <div class="gd-profile-image-wrapper">
                        <!-- Placeholder Image -->
                        <div class="gd-img-placeholder"></div>
                        <span class="gd-match-badge">91% Match</span>
                    </div>
                    <div class="gd-profile-info">
                        <h3>Elena, 27</h3>
                        <p class="gd-location text-muted">📍 Madrid, Spain</p>
                        <p class="gd-bio">Foodie and dog mom. Let's make some great recipes together.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
    <section class="gd-how-it-works gd-section" style="background-color: var(--gd-bg-subtle);">
        <div class="gd-container">
            <div class="text-center gd-section-header gd-fade-in">
                <h2>How GroundedDating Works</h2>
                <p class="text-muted">Four simple steps to finding your person.</p>
            </div>

            <div class="gd-steps-grid d-flex gap-8 justify-center gd-fade-in">
                <!-- Step 1 -->
                <div class="gd-step text-center">
                    <div class="gd-step-icon">1</div>
                    <h3 class="gd-step-title">Create Your Profile</h3>
                    <p class="text-muted">Sign up and verify your identity securely.</p>
                </div>
                <!-- Step 2 -->
                <div class="gd-step text-center">
                    <div class="gd-step-icon">2</div>
                    <h3 class="gd-step-title">Discover Local Matches</h3>
                    <p class="text-muted">Browse curated profiles in your area.</p>
                </div>
                <!-- Step 3 -->
                <div class="gd-step text-center">
                    <div class="gd-step-icon">3</div>
                    <h3 class="gd-step-title">Start Conversations</h3>
                    <p class="text-muted">Engage in meaningful chats using our safe platform.</p>
                </div>
                <!-- Step 4 -->
                <div class="gd-step text-center">
                    <div class="gd-step-icon">4</div>
                    <h3 class="gd-step-title">Build Connections</h3>
                    <p class="text-muted">Meet in real life and discover a deeper relationship.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SAFETY & VERIFICATION SECTION -->
    <section class="gd-safety gd-section">
        <div class="gd-container">
            <div class="d-flex align-center gap-8 gd-fade-in">
                <div class="gd-safety-content" style="flex: 1;">
                    <h2>Safety is Our Foundation</h2>
                    <p class="text-muted">We believe in a secure dating environment. Our platform features:</p>
                    <ul class="gd-safety-list">
                        <li>Photo Verification via AI</li>
                        <li>Active Profile Moderation 24/7</li>
                        <li>Safe, Encrypted Messaging</li>
                        <li>Strict Community Guidelines</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/safety')); ?>" class="gd-btn gd-btn-outline" style="margin-top: 2rem;">Read Safety Policy</a>
                </div>
                <div class="gd-safety-visual" style="flex: 1; min-height: 300px; border-radius: 16px; background: linear-gradient(135deg, var(--gd-primary-light), transparent); border: 1px solid var(--gd-primary);">
                    <!-- Trust visual illustration goes here -->
                </div>
            </div>
        </div>
    </section>

    <!-- SUCCESS STORIES SECTION -->
    <section class="gd-success gd-section" style="background-color: var(--gd-bg-subtle);">
        <div class="gd-container">
            <div class="text-center gd-section-header gd-fade-in">
                <h2>Success Stories</h2>
                <p class="text-muted">Real couples who found love on GroundedDating.</p>
            </div>

            <div class="gd-success-grid d-flex gap-8 justify-center gd-fade-in">
                <article class="gd-card gd-testimonial text-center">
                    <p class="gd-quote">"We met here and realized we lived just two blocks away. A year later, we are engaged!"</p>
                    <div class="gd-testimonial-author">
                        <h4 class="margin-bottom-0">Anna & Mark</h4>
                        <span class="text-muted">Toronto, Canada</span>
                    </div>
                </article>

                <article class="gd-card gd-testimonial text-center">
                    <p class="gd-quote">"The verification process gave me peace of mind. I found someone truly authentic."</p>
                    <div class="gd-testimonial-author">
                        <h4 class="margin-bottom-0">Lisa & Tom</h4>
                        <span class="text-muted">Sydney, Australia</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- MEMBERSHIP PLANS SECTION -->
    <section class="gd-pricing gd-section">
        <div class="gd-container">
            <div class="text-center gd-section-header gd-fade-in">
                <h2>Membership Plans</h2>
                <p class="text-muted">Choose the level of connection that suits you.</p>
            </div>

            <div class="gd-pricing-grid d-flex gap-8 justify-center align-center gd-fade-in">
                <!-- Free Plan -->
                <div class="gd-card gd-pricing-card text-center">
                    <h3>Free</h3>
                    <div class="gd-price text-primary"><h4>$0<span class="text-muted"> /mo</span></h4></div>
                    <ul class="gd-pricing-features">
                        <li>Basic Profile Setup</li>
                        <li>Limited local matches</li>
                        <li>1 chat initiation per week</li>
                    </ul>
                    <a href="#" class="gd-btn gd-btn-outline">Current Plan</a>
                </div>

                <!-- Premium (Highlighted) Plan -->
                <div class="gd-card gd-pricing-card gd-pricing-card-highlight text-center" style="border-color: var(--gd-primary); transform: scale(1.05); box-shadow: var(--gd-shadow-glow);">
                    <div class="gd-popular-badge" style="background: var(--gd-primary); color: white; padding: 4px 12px; border-radius: 999px; font-size: 0.8rem; display: inline-block; margin-bottom: 1rem;">Most Popular</div>
                    <h3>Premium</h3>
                    <div class="gd-price text-primary"><h4>$29.99<span class="text-muted" style="color:var(--gd-text-heading)"> /mo</span></h4></div>
                    <ul class="gd-pricing-features">
                        <li>Unlimited Swipes</li>
                        <li>See Who Likes You</li>
                        <li>Unlimited Chat Initiations</li>
                        <li>Read Receipts</li>
                        <li>Travel Mode</li>
                    </ul>
                    <a href="#" class="gd-btn gd-btn-primary">Upgrade Now</a>
                </div>

                <!-- Plus Plan -->
                <div class="gd-card gd-pricing-card text-center">
                    <h3>Plus</h3>
                    <div class="gd-price text-primary"><h4>$14.99<span class="text-muted"> /mo</span></h4></div>
                    <ul class="gd-pricing-features">
                        <li>Unlimited Swipes</li>
                        <li>See Who Likes You</li>
                        <li>5 chat initiations per week</li>
                    </ul>
                    <a href="#" class="gd-btn gd-btn-outline">Choose Plus</a>
                </div>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();

<?php
/**
 * Template Name: App - Matches UI
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-app-layout" style="background-color: var(--gd-bg-subtle);">
    <div class="gd-container" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-8)); padding-bottom: var(--gd-space-16);">
        
        <div class="d-flex justify-between align-center" style="margin-bottom: var(--gd-space-8);">
            <h2>Your Matches</h2>
            
            <div class="d-flex gap-4 align-center">
                <span class="text-muted" style="font-size: 0.9rem;">Sort by:</span>
                <select class="gd-input" style="padding: 8px 16px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-card); color: var(--gd-text-body);">
                    <option>Highest Match %</option>
                    <option>Recently Active</option>
                    <option>Distance</option>
                </select>
            </div>
        </div>

        <div class="gd-profiles-grid d-flex gap-8" style="flex-wrap: wrap;">
            
            <!-- Match Card 1 -->
            <article class="gd-card gd-profile-card" style="padding:0; border: none;">
                <div class="gd-profile-image-wrapper" style="height: 350px;">
                    <div class="gd-img-placeholder" style="background: linear-gradient(180deg, var(--gd-border-color), var(--gd-bg-subtle));"></div>
                    <span class="gd-match-badge" style="background: var(--gd-primary); color: white;">98% Match</span>
                </div>
                <div class="gd-profile-info" style="padding: var(--gd-space-4); background: var(--gd-bg-card);">
                    <div class="d-flex justify-between align-center" style="margin-bottom: 8px;">
                        <h3 style="margin: 0;">Sarah, 29 <span style="font-size: 1rem; color: #48BB78;">●</span></h3>
                    </div>
                    <p class="gd-location text-muted" style="margin-bottom: var(--gd-space-4);">📍 2 miles away</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="gd-btn gd-btn-primary" style="flex:1; padding: 10px;">Message</a>
                        <a href="#" class="gd-btn gd-btn-outline" style="padding: 10px;">Profile</a>
                    </div>
                </div>
            </article>

            <!-- Match Card 2 -->
            <article class="gd-card gd-profile-card" style="padding:0; border: none;">
                <div class="gd-profile-image-wrapper" style="height: 350px;">
                    <div class="gd-img-placeholder" style="background: linear-gradient(180deg, var(--gd-border-color), var(--gd-bg-subtle));"></div>
                    <span class="gd-match-badge" style="background: var(--gd-bg-card); color: var(--gd-primary);">92% Match</span>
                </div>
                <div class="gd-profile-info" style="padding: var(--gd-space-4); background: var(--gd-bg-card);">
                    <div class="d-flex justify-between align-center" style="margin-bottom: 8px;">
                        <h3 style="margin: 0;">Jessica, 27</h3>
                    </div>
                    <p class="gd-location text-muted" style="margin-bottom: var(--gd-space-4);">📍 5 miles away</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="gd-btn gd-btn-primary" style="flex:1; padding: 10px;">Message</a>
                        <a href="#" class="gd-btn gd-btn-outline" style="padding: 10px;">Profile</a>
                    </div>
                </div>
            </article>

            <!-- Match Card 3 -->
            <article class="gd-card gd-profile-card" style="padding:0; border: none;">
                <div class="gd-profile-image-wrapper" style="height: 350px;">
                    <div class="gd-img-placeholder" style="background: linear-gradient(180deg, var(--gd-border-color), var(--gd-bg-subtle));"></div>
                    <span class="gd-match-badge" style="background: var(--gd-bg-card); color: var(--gd-primary);">89% Match</span>
                </div>
                <div class="gd-profile-info" style="padding: var(--gd-space-4); background: var(--gd-bg-card);">
                    <div class="d-flex justify-between align-center" style="margin-bottom: 8px;">
                        <h3 style="margin: 0;">Amanda, 31 <span style="font-size: 1rem; color: #48BB78;">●</span></h3>
                    </div>
                    <p class="gd-location text-muted" style="margin-bottom: var(--gd-space-4);">📍 10 miles away</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="gd-btn gd-btn-primary" style="flex:1; padding: 10px;">Message</a>
                        <a href="#" class="gd-btn gd-btn-outline" style="padding: 10px;">Profile</a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</main>

<?php
get_footer();

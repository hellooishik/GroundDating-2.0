<?php
/**
 * Template Name: App - User Profile
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-app-layout" style="background-color: var(--gd-bg-subtle);">
    <div class="gd-container" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-8)); padding-bottom: var(--gd-space-16);">
        
        <div class="d-flex gap-8 flex-col" style="flex-direction: row; align-items: flex-start;">
            
            <!-- Sidebar -->
            <aside class="gd-card" style="flex: 0 0 300px; padding: var(--gd-space-6);">
                <div class="text-center" style="margin-bottom: var(--gd-space-6);">
                    <div style="width: 150px; height: 150px; border-radius: 50%; background: var(--gd-border-color); margin: 0 auto var(--gd-space-4); overflow: hidden;">
                        <!-- Avatar placeholder -->
                    </div>
                    <h3 style="margin-bottom: 4px;">John Doe, 30</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">📍 San Francisco, CA</p>
                    <span class="gd-badge" style="background: var(--gd-primary-light); color: var(--gd-primary); padding: 4px 12px; border-radius: 999px; font-size: 0.8rem; display: inline-block;">Premium Member</span>
                </div>
                
                <nav class="gd-profile-nav d-flex flex-col gap-2">
                    <a href="#" class="gd-btn gd-btn-outline" style="justify-content: flex-start; border-color: transparent; background: var(--gd-bg-subtle); color: var(--gd-primary);">User Profile</a>
                    <a href="#" class="gd-btn gd-btn-outline" style="justify-content: flex-start; border-color: transparent;">Account Settings</a>
                    <a href="#" class="gd-btn gd-btn-outline" style="justify-content: flex-start; border-color: transparent;">Privacy & Safety</a>
                    <a href="#" class="gd-btn gd-btn-outline" style="justify-content: flex-start; border-color: transparent; color: #E53E3E;">Log Out</a>
                </nav>
            </aside>

            <!-- Main Content Area -->
            <div class="gd-card" style="flex: 1; padding: var(--gd-space-8);">
                <h2 style="margin-bottom: var(--gd-space-6); border-bottom: 1px solid var(--gd-border-color); padding-bottom: var(--gd-space-4);">Edit Profile</h2>
                
                <form class="d-flex flex-col gap-6">
                    <div>
                        <label class="gd-label" style="display:block; margin-bottom: 8px; font-weight: 500;">Bio</label>
                        <textarea class="gd-input" rows="4" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">Software engineer by day, amateur chef by night. Looking for someone to explore the city with.</textarea>
                    </div>

                    <div class="d-flex gap-4" style="flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 200px;">
                            <label class="gd-label" style="display:block; margin-bottom: 8px; font-weight: 500;">Height</label>
                            <input type="text" class="gd-input" value="6'0&quot;" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <label class="gd-label" style="display:block; margin-bottom: 8px; font-weight: 500;">Drinking</label>
                            <select class="gd-input" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
                                <option>Socially</option>
                                <option>Never</option>
                                <option>Often</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="gd-label" style="display:block; margin-bottom: 8px; font-weight: 500;">Photos</label>
                        <div class="d-flex gap-4" style="flex-wrap: wrap;">
                            <!-- Photo Grid Placeholders -->
                            <div style="width: 120px; height: 150px; background: var(--gd-border-color); border-radius: 8px; display: flex; align-items:center; justify-content:center; cursor: pointer;">+</div>
                            <div style="width: 120px; height: 150px; background: var(--gd-bg-main); border: 2px dashed var(--gd-border-color); border-radius: 8px; display: flex; align-items:center; justify-content:center; cursor: pointer;">Add</div>
                        </div>
                    </div>

                    <div style="margin-top: var(--gd-space-4); border-top: 1px solid var(--gd-border-color); padding-top: var(--gd-space-6);">
                        <button type="submit" class="gd-btn gd-btn-primary">Save Changes</button>
                    </div>
                </form>

            </div>
            
        </div>
    </div>
</main>

<?php
get_footer();

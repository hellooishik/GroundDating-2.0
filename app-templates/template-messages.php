<?php
/**
 * Template Name: App - Messages UI
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-app-layout" style="background-color: var(--gd-bg-subtle);">
    <div class="gd-container" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-8)); padding-bottom: var(--gd-space-8); height: calc(100vh - var(--gd-header-height) - 100px);">
        
        <div class="gd-card d-flex" style="height: 100%; padding: 0; overflow: hidden; border: 1px solid var(--gd-border-color);">
            
            <!-- Conversation List Sidebar -->
            <div style="flex: 0 0 350px; border-right: 1px solid var(--gd-border-color); display: flex; flex-direction: column;">
                <div style="padding: var(--gd-space-4); border-bottom: 1px solid var(--gd-border-color);">
                    <h3 style="margin: 0 0 12px 0;">Messages</h3>
                    <input type="text" class="gd-input" placeholder="Search matches..." style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid var(--gd-border-color); background: var(--gd-bg-main); color: var(--gd-text-body);">
                </div>
                
                <div style="flex: 1; overflow-y: auto;">
                    <!-- Active Convo -->
                    <div class="d-flex gap-4 align-center" style="padding: var(--gd-space-4); background: var(--gd-bg-subtle); border-left: 4px solid var(--gd-primary); cursor: pointer;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--gd-border-color); flex-shrink: 0;"></div>
                        <div style="flex: 1; overflow: hidden;">
                            <div class="d-flex justify-between align-center" style="margin-bottom: 4px;">
                                <h4 style="margin: 0; font-size: 1rem;">Sarah</h4>
                                <span class="text-muted" style="font-size: 0.8rem;">2m ago</span>
                            </div>
                            <p class="text-muted" style="margin: 0; font-size: 0.9rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">That sounds perfect! Let's meet at...</p>
                        </div>
                    </div>

                    <!-- Read Convo -->
                    <div class="d-flex gap-4 align-center" style="padding: var(--gd-space-4); border-bottom: 1px solid var(--gd-border-color); cursor: pointer; transition: background 0.2s;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--gd-border-color); flex-shrink: 0;"></div>
                        <div style="flex: 1; overflow: hidden;">
                            <div class="d-flex justify-between align-center" style="margin-bottom: 4px;">
                                <h4 style="margin: 0; font-size: 1rem;">Jessica</h4>
                                <span class="text-muted" style="font-size: 0.8rem;">Yesterday</span>
                            </div>
                            <p class="text-muted" style="margin: 0; font-size: 0.9rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Thanks for the recommendation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat Window -->
            <div style="flex: 1; display: flex; flex-direction: column;">
                
                <!-- Chat Header -->
                <div class="d-flex justify-between align-center" style="padding: var(--gd-space-4); border-bottom: 1px solid var(--gd-border-color);">
                    <div class="d-flex gap-4 align-center">
                        <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--gd-border-color);"></div>
                        <div>
                            <h4 style="margin: 0;">Sarah</h4>
                            <span class="text-muted" style="font-size: 0.85rem;">Online now</span>
                        </div>
                    </div>
                    <button class="gd-btn gd-btn-outline" style="padding: 8px; border:none;">⋮</button>
                </div>

                <!-- Messages Area -->
                <div style="flex: 1; padding: var(--gd-space-6); overflow-y: auto; background: var(--gd-bg-main);">
                    <div class="text-center text-muted" style="font-size: 0.85rem; margin-bottom: var(--gd-space-4);">Yesterday, 8:42 PM</div>
                    
                    <div class="d-flex" style="margin-bottom: var(--gd-space-4); justify-content: flex-end;">
                        <div style="background: var(--gd-primary); color: white; padding: 12px 16px; border-radius: 16px; border-bottom-right-radius: 4px; max-width: 70%;">
                            Hi Sarah! I noticed we both love the new coffee shop downtown.
                        </div>
                    </div>

                    <div class="d-flex" style="margin-bottom: var(--gd-space-4); justify-content: flex-start;">
                        <div style="background: var(--gd-bg-card); border: 1px solid var(--gd-border-color); padding: 12px 16px; border-radius: 16px; border-bottom-left-radius: 4px; max-width: 70%;">
                            Hey! Yes, their cold brew is amazing. Have you been there recently?
                        </div>
                    </div>

                    <!-- More messages... -->

                </div>

                <!-- Input Area -->
                <div style="padding: var(--gd-space-4); border-top: 1px solid var(--gd-border-color); background: var(--gd-bg-card);">
                    <form class="d-flex gap-4">
                        <input type="text" class="gd-input" placeholder="Type a message..." style="flex: 1; padding: 12px 16px; border-radius: 999px; border: 1px solid var(--gd-border-color); background: var(--gd-bg-main); color: var(--gd-text-body);">
                        <button type="submit" class="gd-btn gd-btn-primary" style="padding: 12px 24px; border-radius: 999px;">Send</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
get_footer();

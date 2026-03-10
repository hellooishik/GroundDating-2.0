<?php
/**
 * Template Name: Contact Page
 *
 * @package GroundedDating
 */

get_header();
?>

<main id="primary" class="site-main gd-page-contact">

    <section class="gd-hero-page gd-section text-center" style="padding-top: calc(var(--gd-header-height) + var(--gd-space-16)); padding-bottom: var(--gd-space-12); background-color: var(--gd-bg-subtle);">
        <div class="gd-container gd-fade-in">
            <h1>Get in Touch</h1>
            <p class="text-muted" style="max-width: 600px; margin: 0 auto;">Have a question about GroundedDating? Want to share a success story? Our team is here to listen.</p>
        </div>
    </section>

    <section class="gd-section">
        <div class="gd-container">
            <div class="gd-card gd-fade-in" style="max-width: 800px; margin: 0 auto;">
                <form class="gd-contact-form d-flex flex-col gap-4">
                    <div class="d-flex gap-4" style="flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 250px;">
                            <label for="name" class="gd-label" style="display:block; margin-bottom: 8px;">Name</label>
                            <input type="text" id="name" class="gd-input" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
                        </div>
                        <div style="flex: 1; min-width: 250px;">
                            <label for="email" class="gd-label" style="display:block; margin-bottom: 8px;">Email</label>
                            <input type="email" id="email" class="gd-input" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="gd-label" style="display:block; margin-bottom: 8px;">Subject</label>
                        <select id="subject" class="gd-input" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);">
                            <option>General Support</option>
                            <option>Safety Concern</option>
                            <option>Billing Question</option>
                            <option>Success Story!</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="gd-label" style="display:block; margin-bottom: 8px;">Message</label>
                        <textarea id="message" class="gd-input" rows="6" style="width:100%; padding: 12px; border: 1px solid var(--gd-border-color); border-radius: 8px; background: var(--gd-bg-main); color: var(--gd-text-body);"></textarea>
                    </div>
                    <button type="submit" class="gd-btn gd-btn-primary" style="align-self: flex-start; margin-top: 16px;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

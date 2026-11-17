<?php
/**
 * Template part: Contact ("Let's Create Something Iconic").
 *
 * @package MillionDollarIdeasTheme
 */
?>

<section class="contact-section" id="contact">
    <div class="container">
        <div class="contact-grid reveal">
            <aside class="contact-aside">
                <span class="eyebrow">Contact</span>
                <h2 class="section-title">Let's Create Something Iconic.</h2>
                <p class="contact-lead">Partner with us to build bold ideas, unforgettable experiences, and meaningful impact.</p>
                <div class="contact-details">
                    <div class="contact-detail"><span class="material-symbols-rounded">mail</span> info@milliondollarideasltd.com</div>
                    <div class="contact-detail"><span class="material-symbols-rounded">language</span> www.milliondollarideasltd.com</div>
                    <div class="contact-detail"><span class="material-symbols-rounded">location_on</span> Lagos, Nigeria</div>
                </div>
            </aside>

            <div class="contact-form-panel">
                <form class="contact-form" method="post" action="#">
                    <div class="form-group">
                        <label for="c-name">Full Name</label>
                        <input type="text" id="c-name" name="c-name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label for="c-email">Email Address</label>
                        <input type="email" id="c-email" name="c-email" placeholder="you@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="c-company">Company</label>
                        <input type="text" id="c-company" name="c-company" placeholder="Company name">
                    </div>
                    <div class="form-group">
                        <label for="c-phone">Phone Number</label>
                        <input type="text" id="c-phone" name="c-phone" placeholder="+234 000 000 0000">
                    </div>
                    <div class="form-group full">
                        <label for="c-type">Project Type</label>
                        <select id="c-type" name="c-type">
                            <option value="">Select an option</option>
                            <option value="promotion">Promotion &amp; PR</option>
                            <option value="strategy">Brand Strategy</option>
                            <option value="streaming">Streaming Growth</option>
                            <option value="development">Artist Development</option>
                            <option value="expansion">International Expansion</option>
                        </select>
                    </div>
                    <div class="form-group full">
                        <label for="c-message">Tell us about your project</label>
                        <textarea id="c-message" name="c-message" rows="4" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" class="button-primary">Book a Consultation <span class="material-symbols-rounded">arrow_outward</span></button>
                    <p class="contact-privacy"><span class="material-symbols-rounded">verified_user</span> We respect your privacy. Your information is safe with us.</p>
                </form>
            </div>
        </div>
    </div>
</section>

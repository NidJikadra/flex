<?php
/**
 * Help Section Component
 */
?>
<section class="help-section">
    <div class="container">
        <div class="interactive-dictionary">
            <div class="content">
                <div class="image-container">
                    <img src="assets/images/help-image.png" width="690" height="781"
                        alt="Laptop with virtual dictionary" class="laptop-image">
                    <div class="review-box">
                        <p class="text">"Flex Solutions transformed our business with a tailored solution that exceeded
                            expectations. Their smooth design, development, and meticulous testing impressed us."</p>
                        <p class="testimonial-wrapper__name">Courtney Henry</p>
                        <p class="testimonial-wrapper__position">CO - FOUNDER, DREAM TRAVEL</p>
                    </div>
                </div>

                <div class="details">
                    <h3 class="h3">How Can We Help?</h3>
                    <p class="description">Get technical support, project inquiries, or consultations. We’re here to
                        provide expert assistance.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Your Name" required>
                            <input type="text" placeholder="Company Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Email Address" required>
                            <input type="tel" placeholder="Contact Number">
                        </div>
                        <label for="file-upload" class="upload-label">
                            <span class="upload-placeholder">Upload Documents</span>
                            <input type="file" id="file-upload" required>
                            <img src="assets/images/icons/upload-icon.svg" height="24" width="24" alt="Upload Icon"
                                class="upload-icon">
                        </label>
                        <textarea name="message" id="brief message" rows="4"
                            placeholder="Brief Overview" required></textarea>
                        <button type="button" class="button btn-primary d-block">Send your inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
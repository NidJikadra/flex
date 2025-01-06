<?php
/**
 * Application Form Section Component
 */
?>

<section class="get-in-touch">
    <div class="container">
        <div class="section-title">
            <div class="title-wrapper">
                <p class="sub-title">apply here</p>
                <h2 class="h2">Application Form</h2>
            </div>
        </div>
        <div class="case-studies-list__content">
            <div class="case-studies-list__content-list">
                <div class="case-studies-list__details">
                    <h3 class="h3">Join Our Team and Make an Impact</h3>
                    <p class="description">Ready to take the next step in your career? Fill out the form below to apply for one of our exciting opportunities.</p>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Email Address" required>
                            <input type="tel" placeholder="Contact Number" required>
                        </div>
                        <label for="file-upload" class="upload-label">
                            <span class="upload-placeholder">Upload your resume (PDF, DOC, DOCX)</span>
                            <input type="file" id="file-upload" required>
                            <img src="assets/images/icons/upload-icon.svg" height="24" width="24" alt="Upload Icon"
                                class="upload-icon">
                        </label>
                        <div class="form-group">
                            <input type="url" id="email" placeholder="LinkedIn Profile Link" required>
                            <input type="url" placeholder="GitHub Profile Link" required>
                        </div>
                        <textarea name="message" id="brief message" rows="4" placeholder="About Your Self"
                            required></textarea>
                        <button type="submit" class="button btn-primary d-block">Submit Application</button>
                    </form>
                </div>
                <div class="case-studies-list__image-container">
                    <img src="assets/images/application-form.png" width="690" height="781"
                        alt="business with a tailored solution">
                </div>
            </div>
        </div>
    </div>
</section>
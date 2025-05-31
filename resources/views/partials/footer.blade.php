<footer class="footer-section" id="contact">
    <div class="footer-container">
        <div class="footer-content">
            <!-- Contact Section -->
            <div class="footer-contact">
                <h3 class="footer-title">Let's Work Together</h3>
                <p class="footer-description">
                    Ready to bring your ideas to life? Let's create something amazing together.
                </p>
                <a href="mailto:{{ $personalInfo['social_links']['email'] }}" class="contact-email">
                    {{ $personalInfo['social_links']['email'] }}
                </a>
            </div>
            
            <!-- Social Links -->
            <div class="footer-social">
                <h4 class="social-title">Follow Me</h4>
                <div class="social-links">
                    <a href="{{ $personalInfo['social_links']['linkedin'] }}" target="_blank" class="social-link linkedin">
                        <i class="fab fa-linkedin-in"></i>
                        <span>LinkedIn</span>
                    </a>
                    <a href="{{ $personalInfo['social_links']['github'] }}" target="_blank" class="social-link github">
                        <i class="fab fa-github"></i>
                        <span>GitHub</span>
                    </a>
                    <a href="mailto:{{ $personalInfo['social_links']['email'] }}" class="social-link email">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                    </a>
                    <a href="{{ $personalInfo['social_links']['whatsapp'] }}" target="_blank" class="social-link whatsapp">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                    <a href="{{ $personalInfo['social_links']['instagram'] }}" target="_blank" class="social-link instagram">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-divider"></div>
            <div class="footer-info">
                <p class="copyright">
                    © 2025 by RayhanWahyu. All rights reserved.
                </p>
                <div class="footer-links">
                    <a href="#privacy" class="footer-link">Privacy Policy</a>
                    <a href="#terms" class="footer-link">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>
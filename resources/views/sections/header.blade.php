<section class="header-section" id="home" style="background-image: url('{{ asset($personalInfo['background_image']) }}');">
    <div class="header-container">
        <div class="header-content">
            <!-- Left Content -->
            <div class="header-left">
                <div class="header-greeting">
                    <span class="greeting-text">Hey, I am {{ $personalInfo['name'] }}</span>
                </div>
                
                <h1 class="header-title">
                    I create <span class="highlight">product design</span><br>
                    and <span class="highlight">brand experience</span>
                </h1>
                
                <p class="header-description">
                    {{ $personalInfo['description'] }}
                </p>
                
                <div class="header-cta">
                    <a href="#contact" class="cta-btn">
                        <span>Get In Touch</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="header-right">
                <div class="profile-container">
                    <div class="profile-background">
                        <div class="bg-shape bg-shape-1"></div>
                        <div class="bg-shape bg-shape-2"></div>
                    </div>
                    
                    <div class="profile-image">
                        <img src="{{ asset($personalInfo['profile_image']) }}" alt="{{ $personalInfo['name'] }}" />
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="floating-element element-1">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="floating-element element-2">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="floating-element element-3">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="floating-element element-4">
                        <i class="fas fa-diamond"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
            <span class="scroll-text">Scroll Down</span>
        </div>
    </div>
    
    <!-- Background Elements -->
    <div class="header-bg-elements">
        <div class="bg-gradient bg-gradient-1"></div>
        <div class="bg-gradient bg-gradient-2"></div>
        <div class="bg-particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
        </div>
    </div>
</section>

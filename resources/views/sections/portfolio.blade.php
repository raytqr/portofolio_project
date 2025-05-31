<section class="portfolio-section" id="portfolio">
    <div class="portfolio-container">
        <div class="section-header">
            <span class="section-subtitle">Recent Projects</span>
            <h2 class="section-title">My Portfolio</h2>
        </div>
        
        <!-- Portfolio Navigation -->
        <div class="portfolio-nav">
            <div class="nav-container">
                <button class="nav-btn active" data-category="all">All Projects</button>
                <button class="nav-btn" data-category="website">Website</button>
                <button class="nav-btn" data-category="mobile">Mobile</button>
                <button class="nav-btn" data-category="uiux">UI/UX</button>
                <button class="nav-btn" data-category="ai">AI</button>
            </div>
        </div>
        
        <!-- Portfolio Content -->
        <div class="portfolio-content">
            <div class="portfolio-scroll-container">
                <div class="portfolio-grid" id="portfolioGrid">
                    
                    <!-- Website Projects -->
                    @foreach($portfolioData['website'] as $project)
                    <div class="portfolio-item" data-category="website">
                        <div class="portfolio-card">
                            <div class="card-image">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy">
                                <div class="image-overlay">
                                    <div class="overlay-content">
                                        <a href="{{ $project['link'] }}" target="_blank" class="view-project">
                                            <i class="fas fa-external-link-alt"></i>
                                            <span>View Project</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-content">
                                <div class="project-category">
                                    <span class="category-tag website">Website</span>
                                </div>
                                <h3 class="project-title">{{ $project['title'] }}</h3>
                                <p class="project-description">{{ $project['description'] }}</p>
                                <a href="{{ $project['link'] }}" target="_blank" class="project-link">
                                    <span>View Projects</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- Mobile Projects -->
                    @foreach($portfolioData['mobile'] as $project)
                    <div class="portfolio-item" data-category="mobile">
                        <div class="portfolio-card">
                            <div class="card-image">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy">
                                <div class="image-overlay">
                                    <div class="overlay-content">
                                        <a href="{{ $project['link'] }}" target="_blank" class="view-project">
                                            <i class="fas fa-external-link-alt"></i>
                                            <span>View Project</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-content">
                                <div class="project-category">
                                    <span class="category-tag mobile">Mobile</span>
                                </div>
                                <h3 class="project-title">{{ $project['title'] }}</h3>
                                <p class="project-description">{{ $project['description'] }}</p>
                                <a href="{{ $project['link'] }}" target="_blank" class="project-link">
                                    <span>View Projects</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- UI/UX Projects -->
                    @foreach($portfolioData['uiux'] as $project)
                    <div class="portfolio-item" data-category="uiux">
                        <div class="portfolio-card">
                            <div class="card-image">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy">
                                <div class="image-overlay">
                                    <div class="overlay-content">
                                        <a href="{{ $project['link'] }}" target="_blank" class="view-project">
                                            <i class="fas fa-external-link-alt"></i>
                                            <span>View Project</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-content">
                                <div class="project-category">
                                    <span class="category-tag uiux">UI/UX</span>
                                </div>
                                <h3 class="project-title">{{ $project['title'] }}</h3>
                                <p class="project-description">{{ $project['description'] }}</p>
                                <a href="{{ $project['link'] }}" target="_blank" class="project-link">
                                    <span>View Projects</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- AI Projects -->
                    @foreach($portfolioData['ai'] as $project)
                    <div class="portfolio-item" data-category="ai">
                        <div class="portfolio-card">
                            <div class="card-image">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy">
                                <div class="image-overlay">
                                    <div class="overlay-content">
                                        <a href="{{ $project['link'] }}" target="_blank" class="view-project">
                                            <i class="fas fa-external-link-alt"></i>
                                            <span>View Project</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-content">
                                <div class="project-category">
                                    <span class="category-tag ai">AI</span>
                                </div>
                                <h3 class="project-title">{{ $project['title'] }}</h3>
                                <p class="project-description">{{ $project['description'] }}</p>
                                <a href="{{ $project['link'] }}" target="_blank" class="project-link">
                                    <span>View Projects</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>


            
            <!-- Scroll Buttons -->
            <button class="scroll-btn scroll-btn-left" id="scrollLeft">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="scroll-btn scroll-btn-right" id="scrollRight">
                <i class="fas fa-chevron-right"></i>
            </button>

        </div>
    </div>
</section>
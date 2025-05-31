<section class="skills-section" id="about">
    <div class="skills-container">
        <div class="section-header">
            <span class="section-subtitle">My Skills</span>
            <h2 class="section-title">My Expertise</h2>
        </div>
        
        <div class="skills-grid">
            @foreach($skillsData as $index => $skill)
            <div class="skill-card {{ $index === 0 ? 'active' : '' }}">
                <div class="skill-icon">
                    <div class="icon-container">
                        @switch($index)
                            @case(0)
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 16L13.09 18.26L16 19L13.09 19.74L12 22L10.91 19.74L8 19L10.91 18.26L12 16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                @break
                            @case(1)
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L15 9H22L17 14L19 22L12 18L5 22L7 14L2 9H9L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                @break
                            @case(2)
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 12H21M12 3V21M18.364 5.636L5.636 18.364M5.636 5.636L18.364 18.364" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                @break
                            @case(3)
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 2V8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 13H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 9H9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                @break
                        @endswitch
                    </div>
                </div>
                
                <div class="skill-content">
                    <h3 class="skill-title">{{ $skill['title'] }}</h3>
                    <p class="skill-description">{{ $skill['description'] }}</p>
                </div>
                
                <div class="skill-overlay"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>
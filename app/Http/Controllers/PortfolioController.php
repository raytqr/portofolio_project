<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolioData = $this->getPortfolioData();
        $skillsData = $this->getSkillsData();
        $personalInfo = $this->getPersonalInfo();
        
        return view('portfolio.index', compact('portfolioData', 'skillsData', 'personalInfo'));
    }

    private function getPersonalInfo()
    {
        return [
            'name' => 'Rayhan Wahyu Taufiqurrahmanw',
            'title' => 'Innovative Designer & Developer Specializing in Web, Mobile, and AI Experiences',
            'description' => 'A passionate product designer and developer, dedicated to creating innovative digital experiences that drive engagement and inspire users across platforms.',
            'profile_image' => 'assets/images/profile.jpg',
            'background_image' => 'assets/images/hero-bg.jpg',
            'social_links' => [
                'linkedin' => 'https://www.linkedin.com/in/rayhanwt/',
                'github' => 'https://github.com/raytqr',
                'email' => 'rayhanwahyut27@gmail.com',
                'whatsapp' => 'https://wa.me/6285159993427',
                'instagram' => 'https://instagram.com/ray_tqr'
            ]
        ];
    }


    private function getSkillsData()
    {
        return [
            [
                'title' => 'Website Development (Laravel)',
                'description' => 'Developing dynamic and responsive websites using Laravel framework, ensuring high performance and scalability.',
                'icon' => 'laravel-icon.svg'
            ],
            [
                'title' => 'Mobile Development (Android)',
                'description' => 'Building intuitive and responsive mobile applications for Android using Java/Kotlin and Android Studio.',
                'icon' => 'android-icon.svg'
            ],
            [
                'title' => 'UI & UX Design',
                'description' => 'Designing user-friendly interfaces and seamless experiences to enhance user satisfaction and engagement.',
                'icon' => 'design-icon.svg'
            ],
            [
                'title' => 'AI Engineering',
                'description' => 'Developing AI-driven applications and systems that utilize machine learning, deep learning, and natural language processing.',
                'icon' => 'ai-engineering-icon.svg'
            ]
        ];
    }


    private function getPortfolioData(){
        return [
            'website' => [
                [
                    'title' => 'Study.in',
                    'description' => 'E-learning platform designed to learn programming languages with various levels of difficulty.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'website'
                ],
                [
                    'title' => 'Competify',
                    'description' => 'Website for discovering competitions and finding competition partners.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/M-Ammar21/competify',
                    'category' => 'website'
                ],
                [
                    'title' => 'Portfolio',
                    'description' => 'My personal portfolio website developed with Laravel.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'website'
                ]
            ],
            'mobile' => [
                [
                    'title' => 'Bengkelin',
                    'description' => 'An app to help users find the nearest auto repair shops.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/Bengkelin',
                    'category' => 'mobile'
                ],
                [
                    'title' => 'FitFood',
                    'description' => 'An app designed to assist users with their diet and nutrition planning.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/raytqr/FitFoood',
                    'category' => 'mobile'
                ]
            ],
            'uiux' => [
                [
                    'title' => 'Boedaya',
                    'description' => 'Website design to introduce the culture of Indonesia from each province.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'uiux'
                ],
                [
                    'title' => 'Sporteez',
                    'description' => 'App design for sports field rental services.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'uiux'
                ],
                [
                    'title' => 'Study.in',
                    'description' => 'Website design for e-learning platform aimed at teaching programming languages.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'uiux'
                ],
                [
                    'title' => 'Bengkelin',
                    'description' => 'App design to help users find the nearest auto repair shops.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'uiux'
                ],
                [
                    'title' => 'FitFood',
                    'description' => 'App design to assist with diet and nutrition planning.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'uiux'
                ],
                [
                    'title' => 'Studio Hub',
                    'description' => 'Website design for a platform to rent music instruments.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'uiux'
                ]
            ],
            'ai' => [
                [
                    'title' => 'Vision Transformer with Transformer Block for Pest Classification',
                    'description' => 'AI model for pest classification using Vision Transformer and Transformer Block techniques.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'ai'
                ],
                [
                    'title' => 'Sentiment Analysis of Wattpad using Naive Bayes',
                    'description' => 'AI model for sentiment analysis on Wattpad stories using the Naive Bayes algorithm.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'ai'
                ],
                [
                    'title' => 'HarlicTexture for Identifying Spices',
                    'description' => 'AI project for identifying spices using texture analysis.',
                    'image' => 'assets/images/projects/profile.jpg',
                    'link' => 'https://github.com/izzudd/study-in',
                    'category' => 'ai'
                ]
            ]
        ];
    }

}
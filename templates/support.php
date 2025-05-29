<?php 
 /**
  * Template Name: Support Page
  * Description: A page template for the support section of the website.
  */
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActiveLabo - 夢のスタート、となりで応援します！</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/support.css">
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white shadow-sm relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-bold text-blue-600 cursor-pointer hover:text-blue-700 transition-colors">
                        logo
                    </h1>
                </div>
                
                <!-- Search Bar -->
                <div class="hidden md:flex flex-1 max-w-md mx-8">
                    <div class="relative w-full">
                        <input 
                            type="text" 
                            placeholder="検索..." 
                            class="search-bar w-full px-4 py-2 rounded-full border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            id="searchInput"
                        >
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-500 hover:text-blue-700 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Contact Button -->
                <div class="flex items-center space-x-4">
                    <button class="bg-blue-100 text-blue-700 px-4 py-2 rounded-lg font-medium hover:bg-blue-200 transition-colors flex items-center space-x-2">
                        <span>問い合わせ</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </button>
                    
                    <!-- Mobile menu button -->
                    <button 
                        class="md:hidden p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 transition-colors"
                        onclick="toggleMobileMenu()"
                        id="mobileMenuBtn"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div class="md:hidden hidden" id="mobileMenu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200 shadow-lg">
                <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">ホーム</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">サービス</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">会社概要</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">ニュース</a>
                <div class="px-3 py-2">
                    <input 
                        type="text" 
                        placeholder="検索..." 
                        class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-blue-900 text-white hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-8">
                <a href="#" class="nav-item px-3 py-4 text-sm font-medium hover:text-blue-200 border-b-2 border-transparent hover:border-blue-200">ホーム</a>
                <a href="#" class="nav-item px-3 py-4 text-sm font-medium hover:text-blue-200 border-b-2 border-transparent hover:border-blue-200">サービス</a>
                <a href="#" class="nav-item px-3 py-4 text-sm font-medium hover:text-blue-200 border-b-2 border-transparent hover:border-blue-200">会社概要</a>
                <a href="#" class="nav-item px-3 py-4 text-sm font-medium hover:text-blue-200 border-b-2 border-transparent hover:border-blue-200">ニュース</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <?php get_template_part('template-part/support/hero'); ?>

    <!-- Solutions Section -->
    <?php get_template_part('template-part/support/solution'); ?>
    
    <!-- Services Section -->
    <?php get_template_part('template-part/support/services'); ?>
    
    <!-- Partners Section -->
   <?php get_template_part('template-part/support/partners'); ?>

    <!-- Support, Client Trust, and Partners Section -->
    <?php get_template_part('template-part/support/network-client-partner'); ?>

    <!-- Awards, Devop section -->
    <?php get_template_part('template-part/support/award-devop'); ?>

    <!-- Customer, Contact section -->
    <?php get_template_part('template-part/support/customer-contact'); ?>

    <!-- Footer -->
    <?php get_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js ?>"></script>
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const button = document.getElementById('mobileMenuBtn');
            const icon = button.querySelector('svg');
            
            menu.classList.toggle('hidden');
            
            if (menu.classList.contains('hidden')) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            } else {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
            }
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                if (searchTerm.trim()) {
                    alert(`検索中: "${searchTerm}"`);
                    // Here you would implement actual search functionality
                }
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
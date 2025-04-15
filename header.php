<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot - Learn Robotics with Arduino</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'robot-yellow': '#FFD600',
                        'robot-blue': '#29B6D8',
                        'robot-coral': '#FF6B5B',
                        'robot-green': '#10B981',
                        'brand-orange': '#fccd4f',
                        'brand-light': '#FFF9F2',
                    },
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        /* Transition for the mobile menu */
        .mobile-menu {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }
        
        .mobile-menu.hidden {
            transform: translateY(-10px);
            opacity: 0;
            pointer-events: none;
        }
        
        .mobile-menu.block {
            transform: translateY(0);
            opacity: 1;
        }

        /* Backdrop overlay when menu is open */
        .menu-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out;
        }
        
        .menu-backdrop.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Scroll to top button styles */
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            transform: translateY(20px);
        }
        
        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    </style>
    <?php wp_head(); ?>
</head>
<body class="font-roboto">
    <!-- Navigation -->
    <div id="menu-backdrop" class="menu-backdrop"></div>
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="w-full bg-white px-4 sm:px-6 lg:px-8 fixed right-0 left-0 z-50 bg-white">
            <div class="flex container mx-auto justify-between h-20">
                <div class="flex items-center">
                    <a href="<?php echo home_url(); ?>" class="flex-shrink-0 flex items-center">
                        <div class="h-12 w-12 bg-robot-yellow rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="10" rx="2" />
                                <circle cx="12" cy="5" r="2" />
                                <path d="M12 7v4" />
                                <line x1="8" y1="16" x2="8" y2="16" />
                                <line x1="16" y1="16" x2="16" y2="16" />
                            </svg>
                        </div>
                        <span class="ml-3 text-xl font-bold">Robot</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo home_url('/about'); ?>" class="font-medium hover:text-robot-blue">GIỚI THIỆU</a>
                    <a href="<?php echo home_url('/courses') ?>" class="font-medium hover:text-robot-blue">KHÓA HỌC</a>
                    <a href="<?php echo home_url('/projects') ?>" class="font-medium hover:text-robot-blue">DỰ ÁN</a>
                    <a href="<?php echo home_url('/blog') ?>" class="font-medium hover:text-robot-blue">BLOG</a>
                    <a href="<?php echo home_url('/form') ?>" class="font-medium hover:text-robot-blue">LIÊN HỆ</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button 
                        id="mobile-menu-button" 
                        class="text-gray-500 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-600 rounded-md p-2"
                        aria-expanded="false"
                        aria-controls="mobile-menu"
                        aria-label="Toggle menu"
                    >
                        <!-- Hamburger Icon -->
                        <svg id="hamburger-icon" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        
                        <!-- Close Icon (Hidden by default) -->
                        <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="mobile-menu hidden md:hidden pb-2 border-t border-gray-200 pt-24">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="<?php echo home_url('/about'); ?>" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">GIỚI THIỆU</a>
                <a href="<?php echo home_url('/courses'); ?>" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">KHÓA HỌC</a>
                <a href="<?php echo home_url('/projects'); ?>" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">DỰ ÁN</a>
                <a href="<?php echo home_url('/blog'); ?>" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">BLOG</a>
                <a href="<?php echo home_url('/form'); ?>" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">LIÊN HỆ</a>
            </div>
        </div>
    </nav>

<scritp>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const menuBackdrop = document.getElementById('menu-backdrop');
            
            // Function to toggle the mobile menu
            function toggleMobileMenu() {
                const isMenuOpen = mobileMenu.classList.contains('block');
                
                // Toggle menu visibility
                if (isMenuOpen) {
                    mobileMenu.classList.remove('block');
                    mobileMenu.classList.add('hidden');
                    
                    // Update button state
                    hamburgerIcon.classList.remove('hidden');
                    hamburgerIcon.classList.add('block');
                    closeIcon.classList.remove('block');
                    closeIcon.classList.add('hidden');
                    
                    // Hide backdrop
                    menuBackdrop.classList.remove('active');
                    
                    // Enable body scrolling
                    document.body.style.overflow = '';
                    
                    // Update ARIA attributes
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                } else {
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('block');
                    
                    // Update button state
                    hamburgerIcon.classList.remove('block');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    closeIcon.classList.add('block');
                    
                    // Show backdrop
                    menuBackdrop.classList.add('active');
                    
                    // Disable body scrolling when menu is open (optional)
                    document.body.style.overflow = 'hidden';
                    
                    // Update ARIA attributes
                    mobileMenuButton.setAttribute('aria-expanded', 'true');
                }
            }
            
            // Add click event listener to the menu button
            mobileMenuButton.addEventListener('click', toggleMobileMenu);
            
            // Close menu when clicking on backdrop
            menuBackdrop.addEventListener('click', toggleMobileMenu);
            
            // Close menu when clicking on a menu item (optional)
            const menuItems = mobileMenu.querySelectorAll('a');
            menuItems.forEach(item => {
                item.addEventListener('click', toggleMobileMenu);
            });
            
            // Close menu when pressing Escape key (accessibility)
            document.addEventListener('keydown', function(event) {
                const isMenuOpen = mobileMenu.classList.contains('block');
                
                if (isMenuOpen && event.key === 'Escape') {
                    toggleMobileMenu();
                }
            });
            
            // Handle window resize (close mobile menu on larger screens)
            window.addEventListener('resize', function() {
                const isMenuOpen = mobileMenu.classList.contains('block');
                const isDesktopView = window.innerWidth >= 768; // 768px is the md breakpoint in Tailwind
                
                if (isMenuOpen && isDesktopView) {
                    mobileMenu.classList.remove('block');
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    hamburgerIcon.classList.add('block');
                    closeIcon.classList.remove('block');
                    closeIcon.classList.add('hidden');
                    menuBackdrop.classList.remove('active');
                    document.body.style.overflow = '';
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                }
            });
        });
    </script>
</scritp>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
						'primary': '#2563eb',
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
        .btn:hover {
            /* color: #ffffff; */
            -webkit-box-shadow: 0px 10px 24px 0px rgba(4, 23, 118, 0.3);
            -moz-box-shadow: 0px 10px 24px 0px rgba(4, 23, 118, 0.3);
            box-shadow: 0px 10px 24px 0px rgba(4, 23, 118, 0.3);
        }
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
            bottom: 100px;
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
<?php 
// Get the current post's URL
$current_url = get_permalink();

$path = parse_url($current_url, PHP_URL_PATH); // Get the path from the URL
$slug = basename(rtrim($path, '/')); // Get the last part of the path and remove trailing slash
?>
<body class="font-roboto">
    <!-- Navigation -->
    <div id="menu-backdrop" class="menu-backdrop"></div>
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="w-full bg-white px-4 sm:px-6 lg:px-8 fixed right-0 left-0 z-50 bg-white">
            <div class="flex container mx-auto justify-between h-20">
                <div class="flex items-center">
					<a href="<?php echo home_url(); ?>" class="flex-shrink-0 flex items-center">
    <img src="https://demo2.ichidemo.info/wp-content/uploads/2025/04/Logo-1.webp"
         alt="SOLA logo"
         class="h-20 w-20"
         style="clip-path: inset(5%); object-fit: cover;" />
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">

<span class="font-bold text-4xl" style="font-family: 'Orbitron', sans-serif; font-size: 3rem;">SOLA</span>

<style>
    /* Màu sắc hiện tại của chữ */
    .font-bold {
        background: linear-gradient(90deg, #29B6D8, #FF6B5B, #FFD600);
        background-clip: text;
        color: transparent;
        -webkit-background-clip: text;
    }

    /* Animation cho việc thay đổi màu */
    @keyframes colorChange {
        0% {
            background: linear-gradient(90deg, #29B6D8, #FF6B5B, #FFD600);
        }
        50% {
            background: linear-gradient(90deg, #10B981, #fccd4f, #29B6D8);
        }
        100% {
            background: linear-gradient(90deg, #FF6B5B, #FFD600, #29B6D8);
        }
    }
</style>
</a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo home_url('/'); ?>" class="<?php echo (esc_html($slug) == '' ? 'text-primary' : ''); ?> font-medium hover:text-primary capitalize">TRANG CHỦ</a>
                    <a href="<?php echo home_url('/about'); ?>" class="<?php echo (esc_html($slug) == 'about' ? 'text-primary' : ''); ?> font-medium hover:text-primary">GIỚI THIỆU</a>
                    <a href="<?php echo home_url('/courses') ?>" class="<?php echo (esc_html($slug) == 'courses' ? 'text-primary' : ''); ?> font-medium hover:text-primary">KHÓA HỌC</a>
                    <a href="<?php echo home_url('/projects') ?>" class="<?php echo (esc_html($slug) == 'projects' ? 'text-primary' : ''); ?> font-medium hover:text-primary">DỰ ÁN</a>
                    <a href="<?php echo home_url('/blog') ?>" class="<?php echo (esc_html($slug) == 'blog' ? 'text-primary' : ''); ?> font-medium hover:text-primary">BLOG</a>
                    <a href="<?php echo home_url('/form') ?>" class="<?php echo (esc_html($slug) == 'form' ? 'text-primary' : ''); ?> font-medium hover:text-primary">LIÊN HỆ</a>
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
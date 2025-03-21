<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/index.css">
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#00a5e2',
            secondary: '#3b82f6',
            thirdary: '#f94886'
          }
        }
      }
    }
  </script>

  <style>
    html {
        scroll-behavior: smooth;
    }
        .dropdown-menu {
            display: none;
            top: 100%;
            left: 0;
            z-index: 50;
            min-width: 250px;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
  </style>
  <?php wp_head(); ?>
</head>
<body class="font-sans">
    <!-- Header -->
    <?php 
    $field_group_id = 'group_67d581e8af915'; // Replace with your field group ID
    $field_group = acf_get_field_group($field_group_id);

    // Get the current post's URL
    $current_url = get_permalink();

    $path = parse_url($current_url, PHP_URL_PATH); // Get the path from the URL
    $slug = basename(rtrim($path, '/')); // Get the last part of the path and remove trailing slash


    $logo = get_field('logo');
    
    echo '<pre>';
    print_r(esc_html($slug));
    echo '</pre>';
    ?>
    <header class="bg-[#00a5e2] py-3 px-6 shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between relative">
            <div class="flex items-center">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/03/cropped-Logo-Thanh-Giang-1.png" alt="Logo" class="h-16 w-16 rounded-full">
            </div>
            
            <nav class="hidden md:flex items-center justify-center space-x-12">
                <a href="<?php echo esc_url(home_url('')); ?>" class="font-bold <?php echo (esc_html($slug) == '/' ? ' bg-gray-100 px-4 py-2 rounded-lg text-gray-600' : 'text-white') ?>">Home</a>
                <div class="dropdown relative">
                    <button class="text-white hover:text-gray-200 font-bold focus:outline-none">
                        Services
                    </button>
                    <div class="absolute dropdown-menu bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="<?php echo esc_url(home_url('/telecom')); ?>" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                            Telecom
                        </a>
                        <a href="<?php echo esc_url(home_url('/human-resource')); ?>" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                            Human resources & support
                        </a>
                        <a href="<?php echo esc_url(home_url('/real-estate')); ?>" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                            Logistic service
                        </a><a href="<?php echo esc_url(home_url('/health-food')); ?>" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                            Health food / cosmetic
                        </a>
                    </div>
                </div>
                
                <!-- Company profile -->
                <a href="<?php echo esc_url(home_url('/company-profile')); ?>" class="font-bold <?php echo (esc_html($slug) == 'company-profile' ? ' bg-gray-100 px-4 py-2 rounded-lg text-gray-600' : 'text-white') ?>">
                    会社概要
                </a>
                
                <!-- Products -->
<!--                 <a href="#" class="font-bold <?php // echo (esc_html($slug) == 'products' ? ' bg-gray-100 px-4 py-2 rounded-lg text-gray-600' : 'text-white') ?>">
                    Products
                </a> -->
            </nav>

            <?php echo do_shortcode('[gtranslate]'); ?>
            
            <a href="<?php echo esc_url(home_url('/contact-form')); ?>" class="hidden md:block bg-white text-red-500 px-6 py-2 rounded-full hover:text-primary transition-colors">
                <i class="fa-solid fa-envelope"></i>
                Contact Us
            </a>

            <button id="menuToggle" class="block md:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Mobile Navigation Menu (Hidden by default) -->
        <div id="mobileMenu" class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
            <!-- Menu Header -->
            <div class="bg-sky-400 p-4 flex items-center justify-between">
                <div class="flex items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/03/cropped-Logo-Thanh-Giang-1.png" alt="Logo" class="h-12 w-12">
                </div>
                <button id="closeMenu" class="text-white focus:outline-none">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>

            <!-- Menu Items -->
            <nav class="divide-y divide-gray-200">
                <a href="<?php echo esc_url(home_url('')); ?>" class="block p-4 hover:bg-gray-50">
                    HOME
                </a>

                <!-- Services Dropdown -->
                <div class="divide-y divide-gray-200">
                    <button id="servicesDropdown" class="w-full flex items-center justify-between p-4 hover:bg-gray-50 focus:outline-none">
                        <span>SERVICES</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform duration-200"></i>
                    </button>
                    
                    <div id="servicesMenu" class="bg-blue-50 hidden">
                        <a href="<?php echo esc_url(home_url('/telecom')); ?>" class="<?php echo (esc_html($slug) == 'telecom' ? 'text-sky-400' : '') ?> block p-4 pl-6 border-t border-gray-200 hover:bg-blue-100">
                            TELECOM
                        </a>
                        <a href="<?php echo esc_url(home_url('/human-resource')); ?>" class="<?php echo (esc_html($slug) == 'human-resource' ? 'text-sky-400' : '') ?> block p-4 pl-6 border-t border-gray-200 hover:bg-blue-100">
                            HUMAN RESOURCES & SUPPORT
                        </a>
                        <a href="<?php echo esc_url(home_url('/real-estate')); ?>" class="<?php echo (esc_html($slug) == 'real-estate' ? 'text-sky-400' : '') ?> block p-4 pl-6 border-t border-gray-200 hover:bg-blue-100">
                            LOGISTIC SERVICE
                        </a>
                        <a href="<?php echo esc_url(home_url('/health-food')); ?>" class="<?php echo (esc_html($slug) == 'health-food' ? 'text-sky-400' : '') ?> block p-4 pl-6 border-t border-gray-200 hover:bg-blue-100">
                            HEALTH FOOD / COSMETIC
                        </a>
                        <a href="<?php echo esc_url(home_url('/health-food')); ?>" class="<?php echo (esc_html($slug) == 'health-food' ? 'text-sky-400' : '') ?> block p-4 pl-6 border-t border-gray-200 hover:bg-blue-100">
                            HEALTH FOOD
                        </a>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/company-profile')); ?>" class="font-bold <?php echo (esc_html($slug) == 'company-profile' ? 'text-sky-40' : '') ?> block p-4 pl-6 border-t border-gray-200 hover:bg-blue-100">
                    会社概要
                </a>
                
                <a href="<?php echo esc_url(home_url('/contact-form')); ?>" class="block p-4 hover:bg-gray-50">
                    CONTACT
                </a>
            </nav>
        </div>
    </header>

    <script>
        // Menu Toggle Functionality
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const servicesDropdown = document.getElementById('servicesDropdown');
        const servicesMenu = document.getElementById('servicesMenu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
            document.body.classList.add('menu-open');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
            document.body.classList.remove('menu-open');
        });

        servicesDropdown.addEventListener('click', () => {
            servicesMenu.classList.toggle('hidden');
            servicesDropdown.querySelector('i').classList.toggle('rotate-180');
        });

        // Initialize with Services dropdown open to match the image
        window.addEventListener('DOMContentLoaded', () => {
            servicesMenu.classList.remove('hidden');
            servicesDropdown.querySelector('i').classList.add('rotate-180');
        });
    </script>

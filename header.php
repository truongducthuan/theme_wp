<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_the_title(); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1E40AF',
            secondary: '#D8E7F7'          
          },
          animation: {
                'fade-in': 'fadeIn 0.5s ease-in-out',
                'slide-up': 'slideUp 0.3s ease-out'
            }
        }
      }
    }  
  </script>

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap');
      * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
      }
      html, body {
          height: 100%;
          font-size: 16px;
          line-height: 1.5;
          color: #333;
      }
      body {
          font-family: 'Noto Sans JP', sans-serif;
      }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .slide-in-left {
            animation: slideInLeft 1s ease-out;
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .slide-in-right {
            animation: slideInRight 1s ease-out;
        }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

      .team-bg {
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 50%, #a5b4fc 100%);
            position: relative;
            overflow: hidden;
        }
        .team-bg::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2025/05/3e373f1fadf042bc778b19a84b80c30978e328a9.png');
            background-size: cover;
            background-position: center;
        }
  </style>

  <?php wp_head(); ?>
</head>
<body class="bg-white">
   <!-- Header -->
<header class="bg-white shadow-sm z-50 fixed w-full top-0 left-0 right-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex-shrink-0 cursor-pointer">
                <h1 class="text-xl font-bold text-primary">ActiveLabo</h1>
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex space-x-6 xl:space-x-8">
                <a href="#" class="text-gray-700 hover:text-blue-600 text-sm font-medium">アクティブラボとは</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 text-sm font-medium">特徴・メリット</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 text-sm font-medium">コスト比較</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 text-sm font-medium">開発スケール</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 text-sm font-medium">FAQ&実績</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 text-sm font-medium">お問い合わせ</a>
            </nav>
            
            <!-- Desktop CTA Button -->
            <div class="hidden lg:flex items-center gap-4">
                <button class="text-black border border-gray-200 px-4 py-2 rounded-md text-sm font-medium hover:opacity-70 transition-colors">
                    資料請求
                </button>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors">
                    お問い合わせ
                </button>
            </div>
            
            <!-- Mobile menu button -->
            <button 
                class="lg:hidden p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 transition-colors"
                onclick="toggleMobileMenu()"
                aria-label="メニューを開く"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation Menu -->
    <div class="lg:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200 shadow-lg">
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">アクティブラボとは</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">特徴・メリット</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">コスト比較</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">開発スケール</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">FAQ&実績</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors">お問い合わせ</a>
            <div class="flex flex-col px-3 py-2 gap-2">
                <a href="#" class="w-full bg-white border border-gray-200 text-black text-center px-4 py-2 rounded-md text-sm font-medium hover:opacity-75 transition-colors">
                    資料請求
                </a>
                <a href="#" class="w-full bg-blue-600 text-white px-4 py-2 text-center rounded-md text-sm font-medium hover:bg-blue-700 transition-colors">
                    お問い合わせ
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const button = event.currentTarget;
        const icon = button.querySelector('svg');
        
        menu.classList.toggle('hidden');
        
        // Toggle icon between hamburger and X
        if (menu.classList.contains('hidden')) {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            button.setAttribute('aria-label', 'メニューを開く');
        } else {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
            button.setAttribute('aria-label', 'メニューを閉じる');
        }
    }
    
    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            const button = document.querySelector('[onclick="toggleMobileMenu()"]');
            const icon = button.querySelector('svg');
            
            menu.classList.add('hidden');
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            button.setAttribute('aria-label', 'メニューを開く');
        });
    });
    
    // Close mobile menu when window is resized to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            const menu = document.getElementById('mobile-menu');
            const button = document.querySelector('[onclick="toggleMobileMenu()"]');
            const icon = button.querySelector('svg');
            
            menu.classList.add('hidden');
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            button.setAttribute('aria-label', 'メニューを開く');
        }
    });

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
</script>


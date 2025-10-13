<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title><?php echo get_the_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/tailwindcss/output.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/animation.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/common.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/index.css'; ?>">

  <script type="module" src="<?php echo get_template_directory_uri() . '/assets/js/home.js'; ?>"></script>

  <?php wp_head();
  ?>
</head>

<body class="text-white overflow-x-hidden">

  <!-- Scroll to Top Button -->
  <button id="scrollTop" class="fixed bottom-8 animate-bounce right-8 bg-secondary hover:bg-secondary/70 text-white p-3 rounded-full shadow-lg opacity-0 transition-all duration-300 z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
  </button>

  <!-- Header -->
  <header id="header" class="w-full z-40 fixed top-0  transition-all duration-300">
    <nav class="flex w-full items-center justify-between gap-5">
      <!-- Laptop Navigation -->
      <div class="hidden bg-fourth lg:flex w-full items-center justify-between gap-5">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="flex w-1/4 h-20 items-center justify-center space-x-2 bg-[#EEF9FF]">
          <div class="relative w-40">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/imgs/logo.svg' ?>"
              alt="Synora Logo"
              class="w-full h-full object-contain" />
          </div>
          <!-- <span class="text-3xl font-bold">S<span class="text-blue-400">ynora</span></span> -->
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex w-3/4 h-20 items-center space-x-8 pl-16  bg-[#EEF9FF]">
          <div class="relative dropdown group">
            <a href="<?php echo home_url(); ?>" class="text-blue-400 hover:text-blue-600 transition-colors">ホーム</a>
          </div>
          <div class="relative dropdown group">
             <a href="<?php echo home_url() . '/service'; ?>" class="text-blue-400 hover:text-blue-600 transition-colors">サービス</a>

            <!-- 			  <button class="flex items-center space-x-1 hover:text-blue-400 transition-colors">
              <span><a href="<?php echo home_url() . '/service'; ?>" class="text-blue-400 hover:text-blue-600 transition-colors">サービス</a></span>
              <svg class="w-4 h-4 group-hover:rotate-180 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button> -->
            <!-- 			  <div class="dropdown-content absolute top-full left-0 mt-2 bg-slate-800 rounded-lg shadow-xl min-w-[300px]">
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">ベトナムオフショア開発</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">観光業特化とした・WEBシステム／アプリ開発・SaaS開発支援</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">クラウド移行</a>
            </div> -->
          </div>
          <div class="relative dropdown group">
            <a href="<?php echo home_url() . '/about'; ?>" class="text-blue-400 hover:text-blue-600 transition-colors">企業情報</a>
          </div>
          <div class="relative dropdown group">
            <a href="<?php echo home_url() . '/blogs'; ?>" class="text-blue-400 hover:text-blue-600 transition-colors">ニュース</a>
          </div>

          <!--           <div class="relative dropdown group">
            <button class="flex items-center space-x-1 hover:text-blue-400 transition-colors">
              <span>Pages</span>
              <svg class="w-4 h-4 group-hover:rotate-180 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content absolute top-full left-0 mt-2 bg-slate-800 rounded-lg shadow-xl min-w-[200px]">
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">About Us</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Team</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Pricing</a>
            </div>
          </div> -->

          <!--           <div class="relative dropdown group">
            <button class="flex items-center space-x-1 hover:text-blue-400 transition-colors">
              <span>Service</span>
              <svg class="w-4 h-4 group-hover:rotate-180 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content absolute top-full left-0 mt-2 bg-slate-800 rounded-lg shadow-xl min-w-[200px]">
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">IT Solutions</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Cloud Services</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Consulting</a>
            </div>
          </div> -->

          <!--           <div class="relative dropdown group">
            <button class="flex items-center space-x-1 hover:text-blue-400 transition-colors">
              <span>Blog</span>
              <svg class="w-4 h-4 group-hover:rotate-180 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content absolute top-full left-0 mt-2 bg-slate-800 rounded-lg shadow-xl min-w-[200px]">
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Latest News</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Articles</a>
              <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Case Studies</a>
            </div>
          </div> -->

          <a href="<?php echo home_url() . '/contact'; ?>" class="text-blue-400 hover:text-blue-600 transition-colors">お問合せ</a>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div class="flex lg:hidden items-center justify-between w-full h-20 space-x-8 px-5 bg-primary">
        <!-- Logo -->
        <div class="flex w-1/3 items-center justify-start bg-primary">
          <a href="<?php echo home_url(); ?>" class="items-center justify-center">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/imgs/Logo-Synora.png' ?>"
              alt="Synora Logo"
              class="w-20 h-20 object-contain" />
          </a>
        </div>
        <!-- Search Bar & Mobile Menu -->
        <div class="flex w-2/3 items-center justify-end">
          <!-- Mobile Menu Button -->
          <button id="mobileMenuBtn" class="lg:hidden bg-secondary hover:bg-third p-3 rounded-full transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu lg:hidden mt-4 bg-slate-800 rounded-lg overflow-hidden">
      <a href="<?php echo home_url(); ?>" class="block px-6 py-3 hover:bg-slate-700 transition-colors">ホーム</a>
      <a href="<?php echo home_url() . '/service'; ?>" class="block px-6 py-3 hover:bg-slate-700 transition-colors">サービス</a>
      <a href="<?php echo home_url() . '/about'; ?>" class="block px-6 py-3 hover:bg-slate-700 transition-colors">企業情報</a>
      <a href="<?php echo home_url() . '/blogs'; ?>" class="block px-6 py-3 hover:bg-slate-700 transition-colors">ニュース</a>
      <a href="<?php echo home_url() . '/contact'; ?>" class="block px-6 py-3 hover:bg-slate-700 transition-colors">お問合せ</a>
    </div>
  </header>
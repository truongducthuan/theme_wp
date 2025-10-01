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
  <button id="scrollTop" class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg opacity-0 transition-all duration-300 z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
  </button>

  <!-- Header -->
  <header class="w-full z-40 fixed top-10">
    <nav class="flex w-full items-center justify-between gap-5">
      <!-- Logo -->
      <div class="flex w-1/3 h-20 items-center justify-end pr-16 rounded-r-full space-x-2 border-r-8 border-r-secondary bg-dark">
        <div class="relative">
          <svg class="w-20 h-20" viewBox="0 0 40 40" fill="none">
            <path d="M10 15L20 10L30 15L20 20L10 15Z" fill="#00d4ff" opacity="0.8" />
            <path d="M10 20L20 15L30 20L20 25L10 20Z" fill="#0099ff" opacity="0.6" />
            <path d="M10 25L20 20L30 25L20 30L10 25Z" fill="#0066ff" opacity="0.4" />
          </svg>
        </div>
        <span class="text-3xl font-bold">Tech<span class="text-blue-400">In</span></span>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden lg:flex w-2/3 h-20 items-center space-x-8 pl-16 rounded-l-full border-l-8 border-l-secondary bg-dark">
        <div class="relative dropdown group">
          <button class="flex items-center space-x-1 hover:text-blue-400 transition-colors">
            <span>Demo</span>
            <svg class="w-4 h-4 group-hover:rotate-180 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="dropdown-content absolute top-full left-0 mt-2 bg-slate-800 rounded-lg shadow-xl min-w-[200px]">
            <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Demo 1</a>
            <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Demo 2</a>
            <a href="#" class="block px-4 py-3 hover:bg-slate-700 transition-colors">Demo 3</a>
          </div>
        </div>

        <div class="relative dropdown group">
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
        </div>

        <div class="relative dropdown group">
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
        </div>

        <div class="relative dropdown group">
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
        </div>

        <a href="#contact" class="hover:text-blue-400 transition-colors">Contact Us</a>

        <!-- Search Bar & Mobile Menu -->
        <div class="flex items-center pl-8 space-x-4">
          <div class="hidden md:flex items-center bg-white rounded-full overflow-hidden">
            <input
              type="text"
              placeholder="Search Here..."
              class="px-6 py-3 text-gray-800 outline-none w-56" />
            <button class="bg-blue-600 hover:bg-blue-700 p-3 transition-colors">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </button>
          </div>

          <!-- Mobile Menu Button -->
          <button id="mobileMenuBtn" class="lg:hidden bg-blue-600 hover:bg-blue-700 p-3 rounded-full transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu lg:hidden mt-4 bg-slate-800 rounded-lg overflow-hidden">
      <a href="#" class="block px-6 py-3 hover:bg-slate-700 transition-colors">Demo</a>
      <a href="#" class="block px-6 py-3 hover:bg-slate-700 transition-colors">Pages</a>
      <a href="#" class="block px-6 py-3 hover:bg-slate-700 transition-colors">Service</a>
      <a href="#" class="block px-6 py-3 hover:bg-slate-700 transition-colors">Blog</a>
      <a href="#" class="block px-6 py-3 hover:bg-slate-700 transition-colors">Contact Us</a>
      <div class="px-6 py-3">
        <input
          type="text"
          placeholder="Search..."
          class="w-full px-4 py-2 rounded-lg text-gray-800 outline-none" />
      </div>
    </div>
  </header>
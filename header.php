<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_the_title(); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#f20c5d',
            secondary: '#e1ebf4',
            thirdary: '#f94886'
          }
        }
      }
    }
  </script>

  <script>
    // Get the screen width

    // Send the screen width to PHP
    // var xhr = new XMLHttpRequest();
    // xhr.open("POST", "home.php", true);
    // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    // xhr.send("screenWidth=" + screenWidth);

    $(document).ready(function() {
      $('#open-nav').click(function(e) {
        $('#navbar').removeClass('hidden')
      })

      $('#close-nav').click(() => {
        $('#navbar').addClass('hidden')
      })
    })
  </script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">
  <style>
    .curtain:after, .curtain_header:after {
      background-image: url('<?php echo get_template_directory_uri(); ?>/asset/svg/rhinestone.svg');
    }

    .curtain_gray:after {
      background-image: url('<?php echo get_template_directory_uri(); ?>/asset/svg/rhinestoneGray.svg');
    }
    .bg-grba {
      background: rgba(0,0,0,0.7);
    }
    .h-buttom {
      max-height: calc(100% - 40px);
    }
    .border-none {
      border: 0 !important;
    }
    @media (min-width: 640px) {
      .h-buttom {
        max-height: 100%;
      }
    }
  </style>

  <?php wp_head(); ?>
</head>
<body>

<!-- Start Navbar -->
<div class="absolute hidden top-[-120px] right-0 bottom-0 left-0 bg-grba z-50" id="navbar">
    <div class="p-8 bg-white flex justify-start fixed top-1 right-1 bottom-1 md:top-8 md:right-8 md:bottom-8 w-[300px] md:w-[400px] md:h-buttom rounded-2xl gap-5 overflow-y-auto scrollbar-custom">
      <ul class="w-full divide-y">
        <li class="flex justify-between items-center py-5">
          <a href="<?php echo esc_url(home_url()); ?>" class="text-center hover:scale-110 hover:animate-pulse cursor-pointer transition-all duration-300">
            <div class="text-2xl md:text-3xl font-bold text-primary">Kids Art Class</div>
            <div class="text-base md:text-xl font-bold">Art Audio</div>
          </a>

          <div class="p-1 cursor-pointer hover:bg-secondary" id="close-nav"><i class="fa-solid fa-xmark text-2xl"></i></div>
        </li>
        <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-news">
          <p class="capitalize font-semibold">Tin tức</p>
          <i class="fa-solid fa-angle-right text-primary"></i>
        </li>
        <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-class">
          <p class="capitalize font-semibold">Thông tin lớp học</p>
          <i class="fa-solid fa-angle-right text-primary"></i>
        </li>
        <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-schedule">
          <p class="capitalize font-semibold">Lịch học</p>
          <i class="fa-solid fa-angle-right text-primary"></i>
        </li>
        <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-faq">
          <p class="capitalize font-semibold">Hỏi đáp</p>
          <i class="fa-solid fa-angle-right text-primary"></i>
        </li>
        <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-access">
          <p class="capitalize font-semibold">Địa điểm</p>
          <i class="fa-solid fa-angle-right text-primary"></i>
        </li>
        <li class="flex gap-2 py-2 mt-8 items-center border-none hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300 bg-secondary rounded-full">
          <span class="text-xl font-bold text-center w-full">+00.0000.0000</span>
        </li>
        <li class="py-5 border-none">
          <div><a href="<?php echo esc_url(home_url('/application-form')); ?>"><div class="px-1.5 py-2 font-semibold border border-primary hover:translate-y-1 text-center rounded-3xl border-b-4 hover:border-b-2 transition-all">Application for free trial lesson</div></a></div>
        </li>
        <li class="py-10 border-none">
          <button class="bg-secondary w-full py-2 rounded-lg hover:bg-gray-300">Đóng Menu</button>
        </li>
      </ul>
    </div>
  </div>
  <!-- End Navbar -->
<main>
  <!-- Start header -->
  <header class="h-[100px] max-w-[1200px] md:h-[120px] w-full fixed top-0 right-0 left-0 mx-auto my-0 z-10">
    <div class="w-full flex items-center justify-between p-5 bg-white">
      <a href="<?php echo esc_url(home_url()); ?>" class="text-center hover:scale-110 hover:animate-pulse cursor-pointer transition-all duration-300">
        <div class="text-2xl md:text-3xl font-bold text-primary">Kids Art Class</div>
        <div class="text-base md:text-xl font-bold">Art Audio</div>
      </a>
      <div class="flex items-center gap-4">
        <div class="hidden md:block">
          <div>
            <a href="tel:0000000" class="flex gap-2 items-center hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">
              <span class="bg-primary p-[7px] flex items-center justify-center text-center rounded-full text-white">
              <i class="fa-solid fa-phone text-[10px]"></i>
              </span>
              <span class="text-2xl font-bold text-center">+00.0000.0000</span>
            </a>
          </div>
          <div class="h-10 mt-2"><a href="<?php echo esc_url(home_url('/application-form')); ?>"><div class="px-1.5 py-0.5 font-semibold border border-primary hover:translate-y-1 rounded-3xl border-b-4 hover:border-b-2 transition-all">Application for free trial lesson</div></a></div>
        </div>
        <label id="open-nav">
          <button class="bg-primary px-[15px] py-[10px] flex justify-center items-center text-white rounded-full hover:scale-110 hover:animate-pulse cursor-pointer transition-all duration-300"><i class="fa-solid fa-bars text-xl"></i></button>
          <p class="text-sm text-center">Menu</p>
        </label>
      </div>
    </div>
    <div class="curtain_header"></div>
  </header>
  <!-- End header -->
  
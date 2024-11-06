<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
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
            secondary: '#e1ebf4'
          }
        }
      }
    }
  </script>
  <?php wp_head(); ?>
</head>
<body>
<main>
  <!-- Start header -->
  <header class="max-w-[1200px] h-[120px] fixed top-0 right-0 left-0 mx-auto my-0 z-10">
    <div class="w-full flex items-center justify-between p-5 bg-white">
      <div class="text-center hover:scale-110 hover:animate-pulse cursor-pointer transition-all duration-300">
        <div class="text-3xl font-bold text-primary">Kids Art Class</div>
        <div class="text-xl font-bold">Art Audio</div>
      </div>
      <div class="flex items-center gap-4">
        <div>
          <div>
            <a href="tel:0000000" class="flex gap-2 items-center hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">
              <span class="bg-primary p-[7px] flex items-center justify-center text-center rounded-full text-white">
              <i class="fa-solid fa-phone text-[10px]"></i>
              </span>
              <span class="text-2xl font-bold text-center">+00.0000.0000</span>
            </a>
          </div>
          <div class="h-10 mt-2"><a href="/template/form"><div class="px-1.5 py-0.5 font-semibold border border-primary hover:translate-y-1 rounded-3xl border-b-4 hover:border-b-2 transition-all">Application for free trial lesson</div></a></div>
        </div>
        <div>
          <button class="bg-primary px-[15px] py-[10px] flex justify-center items-center text-white rounded-full hover:scale-110 hover:animate-pulse cursor-pointer transition-all duration-300"><i class="fa-solid fa-bars text-xl"></i></button>
          <p class="text-sm text-center">Menu</p>
        </div>
      </div>
    </div>
  </header>
  <div class="curtain_header"></div>
  <!-- End header -->
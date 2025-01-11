<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_the_title(); ?></title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/tailwindcss/output.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/pagination.css'; ?>">
  <?php  wp_head(); ?>

  <style>
    .hero-pattern {
      background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/bg.png');

    }

    .header {
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
      transition: top .5s ease-in-out;
    }

    #menus_top {
      position: fixed;
      right: 0;
      top: 0;
      width: 7rem;
      height: 6rem;
      z-index: 1100;
    }
    #menus_top a {
      overflow: hidden;
    position: relative;
    display: block;
    height: 100%;
    color: rgba(255,255,255,0);
    font-size: 1rem;
    text-decoration: none;
    }
    #menus_top a::where(a[href]) {
      text-underline-offset: .3em;
      outline: none;
      cursor: pointer;
    }
    #menus_top a::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      width: 3rem;
      margin-top: -.1rem;
      margin-left: -1.5rem;
      border-top: .2rem solid var(--color-base);
      pointer-events: none;
    }
    #menus_top a::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      width: 3rem;
      margin-top: -.1rem;
      margin-left: -1.5rem;
      border-top: .2rem solid var(--color-base);
      pointer-events: none;
    }

    .icon-menu {
      display: block;
      position: relative;
      background: black;
    width: 26px;
    height: 2px;
    }

    #open-nav:hover span:first-child {
      transform: translateY(5px) rotate(-25deg);
    }
    #open-nav:hover span:nth-child(2) {
      transform: translateY(-5px) rotate(25deg);
    }
	  
	  .menu-close__top {
		  transform: translateY(5px) rotate(-33deg);
	  }
	  .menu-close__bottom {
		  transform: translateY(-5px) rotate(33deg);
	  }

    .scroll-right-left {
      right: 0;
      transition: right 0.5s ease-in-out;
    }
    .scroll-left-right {
      right: -100%;
      transition: right 0.5s ease-in-out;
    }

    @keyframes scrollBottom {
      100% {
        top: 10;
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <main class="w-full h-full hero-pattern bg-[#222222]">
              <div class="w-full relative">
                <div class="flex justify-between items-center header fixed top-5 md:-top-24 left-5 md:left-0 right-5 md:right-0 z-30 max-w-[1200px] mx-auto flex-wrap bg-white min-h-[60px] md:min-h-[80px] rounded-[100px] max-md:max-w-full">
                  <a
                    href="<?php echo esc_url(home_url('')); ?>"
                    class="flex overflow-hidden gap-2 items-start ml-5 md:pl-12 my-auto"
                  >
                    <!-- Left -->
                    <div class="flex gap-1 items-center py-2">
                      <img
                        loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/Logo.svg"
                        class="object-contain shrink-0 self-stretch my-auto"
                      />
                    </div>
                  </a>

                  <!-- Right -->
                  <div class="hidden md:flex gap-10 items-center">
                    <div class="flex justify-between items-center gap-10" id="menus-top">
                      <a
                        href="<?php echo esc_url(home_url('/our-business')); ?>"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        事業内容
                      </a>
                      <a
                        href="<?php echo esc_url(home_url('/achievements')); ?>"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        実績
                      </a>
                      <a
                       href="<?php echo esc_url(home_url('/what-we-do')); ?>"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        企業案内
                      </a>
                      <a
                        href="<?php echo esc_url(home_url('/recruitment')); ?>"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        採用情報
                      </a>
                      <a
                        href="<?php echo esc_url(home_url('/news')); ?>"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        お知らせ
                      </a>
                    </div>
                    <div class="flex gap-3 items-center">
                      <div
                        class="flex gap-2 items-center text-center py-3 my-auto text-sm text-white whitespace-nowrap w-[126px]"
                      >
                        <a
                          href="<?php echo esc_url(home_url('/recruitment')); ?>"
                          class="gap-2.5 self-stretch px-5 py-3.5 my-auto hover:border-[1px] hover:border-solid hover:border-neutral-900 hover:bg-neutral-300 hover:text-neutral-900 bg-neutral-900 min-h-[45px] rounded-[100px] w-full max-md:px-5 transition-all"
                        >
                          お問い合わせ
                        </a>
                      </div>
                      <div
                        class="flex gap-2 items-center text-center pr-4 py-3 my-auto text-sm text-white whitespace-nowrap w-[140px]"
                      >
                        <a
                          href="<?php echo esc_url(home_url('/contact-form')); ?>"
                          class="gap-2.5 self-stretch px-5 py-3.5 my-auto hover:border-[1px] hover:border-solid hover:border-blue-900 hover:bg-blue-300 hover:text-blue-900 bg-blue-900 min-h-[45px] rounded-[100px] w-full max-md:px-5 transition-all"
                        >
                          資料請求
                        </a>
                      </div>
                    </div>
                  </div>

                  <div id="open-nav" class="flex md:hidden w-20 cursor-pointer flex-col justify-center items-center p-5">
                    <span class="icon-menu top-0"></span>
                    <span class="icon-menu top-2"></span>
                  </div>
                </div>

                <div class="block md:hidden absolute top-0 -right-[100%] bottom-0 left-0 bg-grba z-50" id="navbar">
                  <div class="p-8 bg-white flex justify-start fixed top-1 -right-[100%] bottom-1 md:top-8 md:right-8 md:bottom-8 w-[300px] md:w-[400px] md:h-buttom rounded-2xl gap-5 overflow-y-auto scrollbar-custom">
					  <div class="absolute right-1 top-1 cursor-pointer text-3xl p-5 close-nav">
						 <span class="icon-menu top-0 menu-close__top"></span>
                    	<span class="icon-menu top-2 menu-close__bottom"></span>
					  </div>
                    <ul class="w-full divide-y">
                      <li class="flex justify-between items-center py-5">
                        <a href="<?php echo esc_url(home_url()); ?>" class="text-center hover:scale-110 hover:animate-pulse cursor-pointer transition-all duration-300">
                        <img
                        loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/Logo.svg"
                        class="object-contain shrink-0 self-stretch my-auto"
                        />
                        </a>

                        <div class="p-1 cursor-pointer hover:bg-secondary close-nav"><i class="fa-solid fa-xmark text-2xl"></i></div>
                      </li>
                      <li class="hover:bg-[#f20c5d08] hover:translate-x-3 cursor-pointer transition-all duration-300">
                        <a href="<?php echo esc_url(home_url('/our-business')) ?>" class="flex justify-between items-center py-4 w-full">
                          <p class="capitalize font-semibold">事業内容</p>
                          <i class="fa-solid fa-angle-right text-primary"></i>
                        </a>
                      </li>
                      <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-class">
                        <a href="<?php echo esc_url(home_url('/achievements')); ?>" class="w-full">
                          <p class="capitalize font-semibold">実績</p>
                          <i class="fa-solid fa-angle-right text-primary"></i>
                        </a>
                      </li>
                      <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-schedule">
                        <a href="<?php echo esc_url(home_url('/what-we-do')); ?>" class="w-full">
                          <p class="capitalize font-semibold">企業案内</p>
                            <i class="fa-solid fa-angle-right text-primary"></i>
                        </a>  
                      </li>
                      <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-faq">
                        <a href="<?php echo esc_url(home_url('/recruitment')); ?>" class="w-full">
                          <p class="capitalize font-semibold">採用情報</p>
                            <i class="fa-solid fa-angle-right text-primary"></i>
                        </a>  
                      </li>
                      <li class="flex justify-between items-center hover:bg-[#f20c5d08] hover:translate-x-3 py-4 cursor-pointer transition-all duration-300" id="scroll-access">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="w-full">
                          <p class="capitalize font-semibold">お知らせ</p>
                            <i class="fa-solid fa-angle-right text-primary"></i>
                        </a>  
                      </li>
  
                      <li class="pt-5 pb-5 border-none">
                        <div>
                        <a href="<?php echo esc_url(home_url('/recruitment')); ?>">
                        <div class="gap-2.5 self-stretch px-5 py-3.5 text-white text-center my-auto hover:border-[1px] hover:border-solid hover:border-neutral-900 hover:bg-neutral-300 hover:text-neutral-900 bg-neutral-900 min-h-[45px] rounded-[100px] w-full max-md:px-5 transition-all">お問い合わせ</div>
                        </a>
                        </div>
                      </li>
                      <li class="pb-5 border-none">
                        <div>
                          <a href="<?php echo esc_url(home_url('/contact-form')); ?>">
                            <div class="gap-2.5 self-stretch px-5 py-3.5 text-white text-center my-auto hover:border-[1px] hover:border-solid hover:border-blue-900 hover:bg-blue-300 hover:text-blue-900 bg-blue-900 min-h-[45px] rounded-[100px] w-full max-md:px-5 transition-all">資料請求</div>
                          </a>
                        </div>
                      </li>
<!--                       <li class="py-10 border-none">
                        <button class="bg-secondary w-full py-2 rounded-lg hover:bg-gray-300 close-nav">x</button>
                      </li> -->
                    </ul>
                  </div>
                </div>
  
  </div>

<script>
  window.onload = function() {
    const header = document.querySelector('.header');
    header.classList.remove('md:-top-24');
    header.classList.add('md:top-10');

    const menu = document.getElementById('open-nav')
    const nav = document.getElementById('navbar')
    const content = document.querySelector('#navbar div')
    const closes = document.querySelectorAll('.close-nav')
    console.log({menu}, content);
    
    menu.addEventListener('click', function(e) {
      nav.classList.remove('scroll-left-right')
      content.classList.remove('scroll-left-right')
      nav.classList.add('scroll-right-left')
      content.classList.add('scroll-right-left')
    })

    closes.forEach(close => {
      close.addEventListener('click', function() {
        nav.classList.remove('scroll-right-left')
        content.classList.remove('scroll-right-left')
        nav.classList.add('scroll-left-right')
        content.classList.add('scroll-left-right')
      })
    })
  };
</script>
  
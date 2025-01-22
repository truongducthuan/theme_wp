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

    .menu-top::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: -100%;
      right: 100%;
      height: 1px;
      background-color: #1e3a8a;
      -webkit-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
      -webkit-transition-timing-function: ease-out;
      -o-transition-timing-function: ease-out;
      transition-timing-function: ease-out;
    }

    .menu-top:hover::after,
    .menu-top.active::after {
      left: 0%;
      right: 0%;
    }

    .active,
    .menu-top:hover {
      color: #1e3a8a;
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
		width:100%;
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

<?php
// Get the current post's URL
$current_url = get_permalink();

$path = parse_url($current_url, PHP_URL_PATH); // Get the path from the URL
$slug = basename(rtrim($path, '/')); // Get the last part of the path and remove trailing slash

?>

<body <?php body_class(); ?> class="relative">
  <div id="modal_member" class="fixed left-[100%] right-0 bg-modal bottom-0 top-0 z-40 cursor-pointer" onclick="closeModal()"></div>

  <main class="w-full h-full hero-pattern bg-[#222222] relative">
              <div class="w-full relative">
                <div class="site-header flex justify-between items-center header fixed top-5 lg:-top-24 left-5 lg:left-0 right-5 lg:right-0 z-30 max-w-[1200px] mx-auto flex-wrap bg-white min-h-[60px] lg:min-h-[80px] rounded-[100px] max-lg:max-w-full">
                  <a
                    href="<?php echo esc_url(home_url('')); ?>"
                    class="_logo flex overflow-hidden gap-2 items-start ml-5 my-auto"
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
                  <div class="hidden lg:flex gap-10 items-center">
                    <div class="flex justify-between items-center gap-10" id="menus-top">
                      <a
                        href="<?php echo esc_url(home_url('/our-business')); ?>"
                        class="<?php echo (esc_html($slug) == 'our-business' ? 'active' : ''); ?> self-stretch h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        事業内容
                      </a>
                      <a
                        href="<?php echo esc_url(home_url('/achievements')); ?>"
                        class="<?php echo (esc_html($slug) == 'achievements' ? 'active' : ''); ?> self-stretch h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        実績
                      </a>
                      <a
                       href="<?php echo esc_url(home_url('/what-we-do')); ?>"
                        class="<?php echo (esc_html($slug) == 'what-we-do' ? 'active' : ''); ?> self-stretch h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        企業案内
                      </a>
                      <a
                        href="<?php echo esc_url(home_url('/recruitment')); ?>"
                        class="<?php echo (esc_html($slug) == 'recruitment' ? 'active' : ''); ?> self-stretch h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        採用情報
                      </a>
                      <a
                        href="<?php echo esc_url(home_url('/news')); ?>"
                        class="<?php echo (esc_html($slug) == 'news' ? 'active' : ''); ?> self-stretch h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        お知らせ
                      </a>
                    </div>
                    <div class="flex gap-3 items-center">
                      <div
                        class="flex gap-2 items-center text-center py-3 my-auto text-sm text-white whitespace-nowrap w-[126px]"
                      >
                        <a
                          href="<?php echo esc_url(home_url('/contact-form')); ?>"
                          class="gap-2.5 self-stretch px-5 py-3.5 my-auto hover:border-[1px] hover:border-solid hover:border-neutral-900 hover:bg-neutral-300 hover:text-neutral-900 bg-neutral-900 min-h-[45px] rounded-[100px] w-full max-lg:px-5 transition-all"
                        >
                          お問い合わせ
                        </a>
                      </div>
                      <div
                        class="flex gap-2 items-center text-center pr-4 py-3 my-auto text-sm text-white whitespace-nowrap w-[140px]"
                      >
                        <a
                          href="<?php echo esc_url(home_url('/document-request')); ?>"
                          class="gap-2.5 self-stretch px-5 py-3.5 my-auto hover:border-[1px] hover:border-solid hover:border-blue-900 hover:bg-blue-300 hover:text-blue-900 bg-blue-900 min-h-[45px] rounded-[100px] w-full max-lg:px-5 transition-all"
                        >
                          資料請求
                        </a>
                      </div>
                    </div>
                  </div>

                  <div id="open-nav" class="flex lg:hidden w-20 cursor-pointer flex-col justify-center items-center p-5">
                    <span class="icon-menu top-0"></span>
                    <span class="icon-menu top-2"></span>
                  </div>
                </div>

                <div class="block lg:hidden absolute top-0 -right-[100%] bottom-0 left-0 bg-grba z-50" id="navbar">
                  <div class="p-8 bg-white flex justify-start fixed top-1 -right-[100%] bottom-1 lg:top-8 lg:right-8 lg:bottom-8 w-[300px] lg:w-[400px] lg:h-buttom rounded-2xl gap-5 overflow-y-auto scrollbar-custom">
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
                        <a href="<?php echo esc_url(home_url('/contact-form')); ?>">
                        <div class="gap-2.5 self-stretch px-5 py-3.5 text-white text-center my-auto hover:border-[1px] hover:border-solid hover:border-neutral-900 hover:bg-neutral-300 hover:text-neutral-900 bg-neutral-900 min-h-[45px] rounded-[100px] w-full max-lg:px-5 transition-all">お問い合わせ</div>
                        </a>
                        </div>
                      </li>
                      <li class="pb-5 border-none">
                        <div>
                          <a href="<?php echo esc_url(home_url('/document-request')); ?>">
                            <div class="gap-2.5 self-stretch px-5 py-3.5 text-white text-center my-auto hover:border-[1px] hover:border-solid hover:border-blue-900 hover:bg-blue-300 hover:text-blue-900 bg-blue-900 min-h-[45px] rounded-[100px] w-full max-lg:px-5 transition-all">資料請求</div>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
  
  </div>

<script>
  window.onload = function() {
    const header = document.querySelector('.header');
    header.classList.remove('lg:-top-24');
    header.classList.add('lg:top-10');

    const menu = document.getElementById('open-nav')
    const nav = document.getElementById('navbar')
    const content = document.querySelector('#navbar div')
    const closes = document.querySelectorAll('.close-nav')
    
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
  
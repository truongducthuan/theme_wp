<style>
  #home-hero::after {
    content: "";
    position: absolute;
    bottom: -50%;
    z-index: 10;
    left: 0;
    transform: translateX(5%);
    width: 90%;
    height: 90%;
    background: url(<?php echo get_template_directory_uri() . '/assets/imgs/LOGO-synora.webp'; ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    opacity: 0.2;
  }

  #home-hero::before {
    content: "";
    position: absolute;
    top: 100%;
    /* z-index: 5; */
    left: 38%;
    /*     width: 100%; */
    /* width: 100%; */
    right: 0;
    height: 18%;
    right: 0;
    background: linear-gradient(135deg, var(--fourth-color) 50%, var(--fourth-color) 100%);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }

  @media (max-width: 768px) {
    #home-hero::before {
      height: 8%;
      left: 43%;
      /* width: 57%; */
    }

    #home-hero::after {
      content: "";
      position: absolute;
      bottom: -50%;
      z-index: 10;
      left: 0;
      width: 100%;
      height: 130%;
      transform: translateX(0%);
      background: url(<?php echo get_template_directory_uri() . '/assets/imgs/LOGO.webp'; ?>);
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
      opacity: 0.2;
    }
  }

  /* 1. Thiết lập container để kiểm soát vị trí ảnh con */
  .slideshow-container {
    position: relative;
    width: 100%;
    /* Đảm bảo chiều cao để ảnh hiển thị đúng. Thay 400px bằng chiều cao mong muốn */
    height: 460px;
    overflow: hidden;
    /* Ẩn các phần ảnh bị zoom ra ngoài */
    border-radius: 10%;
    right: 0;
  }

  @media (max-width: 768px) {
    .slideshow-container {
      right: 0;
      width: 56%;
      height: 200px;
    }
  }

  /* 2. Thiết lập cơ bản cho các slide */
  .slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Đảm bảo ảnh bao phủ toàn bộ container */
    opacity: 0;
    /* Mặc định ẩn tất cả các ảnh */
    transition: opacity 2s ease-in-out;
    /* Hiệu ứng chuyển cảnh */
    border-radius: 10%;
  }

  /* 3. Hiệu ứng Zoom Out (Ken Burns ngược) */
  @keyframes zoom-out-animation {
    0% {
      transform: scale(1.2);
    }

    /* Bắt đầu phóng to */
    100% {
      transform: scale(1);
    }

    /* Kết thúc thu nhỏ */
  }

  /* 4. Slide đang hoạt động */
  .active-slide {
    opacity: 1;
    /* Hiển thị slide đang hoạt động */
    animation: zoom-out-animation 10s forwards;
    /* Áp dụng animation */
  }
</style>

<section class="relative z-10 mt-0 lg:mt-0 px-5 lg:px-20 pt-28 pb-8 lg:pt-44 lg:pb-20" id="home-hero">
  <!-- Network Animation Canvas -->
  <canvas id="networkCanvas" class="network-canvas"></canvas>

  <!-- Bg logo -->
  <div class="mx-auto">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left Content -->
      <div class="herro-text h-full relative z-20 hero-group_text space-y-6 ml-0 xl:ml-0 2xl:ml-0 pl-0 md:pl-5 lg:pl-0">
        <div class="inline-block">
          <span class="bg-secondary px-6 py-2 rounded text-sm font-medium">
            観光DXに特化したITソリューション
          </span>
        </div>

        <h1 class="line-height-2 text-4xl text-third md:text-5xl lg:text-6xl xl:text-7xl font-bold whitespace-nowrap">
          <span class="text-secondary ">観光DXで</span><span class="">未来を創る</span>
        </h1>

        <p class="text-slate-700 text-lg xl:text-lg 2xl:text-2xl leading-relaxed">
          私たちは観光業界のニーズに合わせた、革新的で<br />信頼性の高いソフトウェアを提供します。<br />テクノロジーの力であなたのビジネスを次のステージへ。
        </p>

        <!--         <button data-text="Get Start Now" class="techin-btn relative bg-secondary px-8 py-4 rounded font-semibold text-lg transition-all duration-300 transform">
          <span>Get Start Now</span>
        </button> -->
      </div>

      <!-- Right Content - Hero Image -->
      <div class="relative hidden lg:flex justify-end">
        <!-- Purple Geometric Shape -->
        <!-- <div class="absolute inset-0 from-secondary to-purple-600 rounded-full transform rotate-12 scale-110 opacity-80 blur-3xl"></div> -->

        <!-- Businessman Image Placeholder -->
        <div id="hero-slideshow" class="hero-image -mb-3 slideshow-container">
          <img
            src="<?php echo get_template_directory_uri() . '/assets/imgs/home/banner-image1.webp' ?>"
            alt="Professional Businessman"
            class="z-0 w-full h-auto rounded-lg slide active-slide" />
          <img
            src="<?php echo get_template_directory_uri() . '/assets/imgs/home/Container (1).png'; ?>"
            alt="Professional Businessman"
            class="z-0 w-full h-auto rounded-lg slide" />
          <img
            src="<?php echo get_template_directory_uri() . '/assets/imgs/home/banner-img-2.webp'; ?>"
            alt="Professional Businessman"
            class="z-0 w-full h-auto rounded-lg slide" />
        </div>

        <!-- Decorative Elements -->
        <!-- <div class="absolute top-10 right-10 w-20 h-20 border-4 border-blue-400 rounded-full opacity-50 float-animation"></div> -->
        <!-- <div class="absolute bottom-10 left-10 w-16 h-16 border-4 border-purple-400 rounded-full opacity-50 float-animation" style="animation-delay: 1s;"></div> -->
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('#hero-slideshow img');
    let currentSlide = 0;
    const slideInterval = 10000; // 10 giây (bằng với thời gian animation)

    function nextSlide() {
      // 1. Xóa class active-slide và animation khỏi slide hiện tại
      slides[currentSlide].classList.remove('active-slide');

      // 2. Chuyển sang slide tiếp theo
      currentSlide = (currentSlide + 1) % slides.length;

      // 3. Đặt lại animation (quan trọng để animation chạy lại)
      void slides[currentSlide].offsetWidth; // Triggers reflow

      // 4. Thêm class active-slide vào slide mới
      slides[currentSlide].classList.add('active-slide');
    }

    // Khởi tạo slideshow
    setInterval(nextSlide, slideInterval);
  });
</script>
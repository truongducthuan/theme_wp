  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 0.6s ease-out forwards;
    }

    .carousel-container {
      scroll-behavior: smooth;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    .carousel-container::-webkit-scrollbar {
      display: none;
    }

    .logo-card {
      transition: all 0.3s ease;
    }

    .logo-card:hover {
      transform: translateY(-5px);
    }

    .logo-card.active {
      border: 2px solid #06b6d4;
      box-shadow: 0 0 20px rgba(6, 182, 212, 0.3);
    }

    .nav-button {
      transition: all 0.3s ease;
    }

    .nav-button:hover {
      background-color: #6366f1;
      color: white;
      /* transform: scale(1.1); */
    }

    /* 
    .nav-button:active {
      transform: scale(0.95);
    } */
  </style>

  <?php
  $logos = [
    (object) [
      'id' => 1,
      'name' => 'D2Cモデルによる直販比率の向上
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 2,
      'name' => 'パーソナライズによる顧客体験の革新 
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 3,
      'name' => 'D2Cモデルによる直販比率の向上
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 4,
      'name' => 'パーソナライズによる顧客体験の革新 
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 5,
      'name' => 'D2Cモデルによる直販比率の向上
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 6,
      'name' => 'パーソナライズによる顧客体験の革新 
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 7,
      'name' => 'D2Cモデルによる直販比率の向上
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 8,
      'name' => 'パーソナライズによる顧客体験の革新 
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 9,
      'name' => 'D2Cモデルによる直販比率の向上
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
    (object) [
      'id' => 10,
      'name' => 'パーソナライズによる顧客体験の革新 
',
      'image' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
    ],
  ];
  ?>

  <section class="py-16 md:py-24">
    <div class="px-4 md:px-8 lg:px-16 max-w-7xl mx-auto">
      <div class="relative fade-in">
        <!-- Navigation Buttons -->
        <button
          id="prevBtn"
          class="nav-button absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 z-10 w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-primary bg-white flex items-center justify-center text-indigo-600 hover:bg-indigo-600 hover:text-white shadow-lg"
          aria-label="Previous logos">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>

        <button
          id="nextBtn"
          class="nav-button absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 z-10 w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-primary bg-white flex items-center justify-center text-indigo-600 hover:bg-indigo-600 hover:text-white shadow-lg"
          aria-label="Next logos">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>

        <!-- Carousel Container -->
        <div class="overflow-hidden py-5">
          <div id="carousel" class="flex items-center justify-center gap-4 md:gap-6 transition-transform duration-500 ease-in-out">
            <?php
            foreach ($logos as $logo) {
              echo '<div class="logo-card flex-shrink-0 w-48 md:w-64 h-52 md:h-64 bg-third rounded-2xl flex items-center justify-center p-6 shadow-md">';
              echo '<div class="text-center">';
              echo '<div class="flex flex-col items-center justify-center gap-4 text-gray-600">';
              echo '<div class="p-4 bg-primary rounded-full">';
              echo '<img src="' . $logo->image . '" alt="' . $logo->name . '" class="max-w-full object-contain">';
              echo '</div>';
              echo '<div>' . $logo->name . '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            foreach ($logos as $logo) {
              echo '<div class="logo-card flex-shrink-0 w-48 md:w-64 h-52 md:h-64 bg-third rounded-2xl flex items-center justify-center p-6 shadow-md">';
              echo '<div class="text-center">';
              echo '<div class="flex flex-col items-center justify-center gap-4 text-gray-600">';
              echo '<div class="p-4 bg-primary rounded-full">';
              echo '<img src="' . $logo->image . '" alt="' . $logo->name . '" class="max-w-full object-contain">';
              echo '</div>';
              echo '<div>' . $logo->name . '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            ?>
          </div>
        </div>

        <!-- Progress Indicators -->
        <!-- <div class="flex justify-center gap-2 mt-8">
          <button class="indicator w-2 h-2 rounded-full bg-indigo-600 transition-all duration-300" data-index="0"></button>
          <button class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></button>
          <button class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></button>
        </div> -->
      </div>
    </div>
  </section>

  <script>
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.indicator');
    const cards = document.querySelectorAll('.logo-card');

    let currentIndex = 0;
    let autoPlayInterval;
    const cardWidth = 256 + 24; // card width + gap
    const mobileCardWidth = 192 + 16; // mobile card width + gap
    const totalCards = cards.length;
    const halfCards = totalCards / 2;

    function getCardWidth() {
      return window.innerWidth >= 768 ? cardWidth : mobileCardWidth;
    }

    function updateCarousel(transition = true) {
      const width = getCardWidth();
      carousel.style.transition = transition ? 'transform 0.5s ease-in-out' : 'none';
      carousel.style.transform = `translateX(-${currentIndex * width}px)`;

      // Update active card
      cards.forEach((card, index) => {
        if (index === currentIndex + cards.length / 2) { // Center card
          card.classList.add('active');
        } else {
          card.classList.remove('active');
        }
      });

      // Update indicators
      indicators.forEach((indicator, index) => {
        if (index === Math.floor(currentIndex / 2)) {
          indicator.classList.remove('bg-gray-300');
          indicator.classList.add('bg-indigo-600', 'w-8');
        } else {
          indicator.classList.remove('bg-indigo-600', 'w-8');
          indicator.classList.add('bg-gray-300');
        }
      });
    }

    function nextSlide() {
      // currentIndex = (currentIndex + 1) % (cards.length - 6);
      currentIndex++
      updateCarousel();

      if (currentIndex >= halfCards - 2) {
        setTimeout(() => {
          currentIndex = 1;
          updateCarousel(false);
        }, 500);
      }
    }

    function prevSlide() {
      // currentIndex = currentIndex === 0 ? cards.length - 7 : currentIndex - 1;
      if (currentIndex <= 2) {
        setTimeout(() => {
          currentIndex = halfCards - 2;
          updateCarousel(false);
        }, 400);
      }
      currentIndex--;
      updateCarousel();
    }

    function startAutoPlay() {
      autoPlayInterval = setInterval(nextSlide, 50000000);
    }

    function stopAutoPlay() {
      clearInterval(autoPlayInterval);
    }

    // Event listeners
    nextBtn.addEventListener('click', () => {
      nextSlide();
      stopAutoPlay();
      startAutoPlay();
    });

    prevBtn.addEventListener('click', () => {
      prevSlide();
      stopAutoPlay();
      startAutoPlay();
    });

    indicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => {
        currentIndex = index * 2;
        updateCarousel();
        stopAutoPlay();
        startAutoPlay();
      });
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    carousel.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoPlay();
    });

    carousel.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
      startAutoPlay();
    });

    function handleSwipe() {
      if (touchStartX - touchEndX > 50) {
        nextSlide();
      }
      if (touchEndX - touchStartX > 50) {
        prevSlide();
      }
    }

    // Pause on hover
    carousel.addEventListener('mouseenter', stopAutoPlay);
    carousel.addEventListener('mouseleave', startAutoPlay);

    // Handle window resize
    window.addEventListener('resize', updateCarousel);

    // Initialize
    updateCarousel();
    startAutoPlay();
  </script>
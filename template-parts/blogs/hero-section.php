  <style>
    /* Custom CSS with news-hero- prefix to avoid duplication */
    .news-hero__background {
      background-image: url('https://techin-reactjs.vercel.app/assets/images/blog/blog-thumb.png');
      background-size: auto;
      background-position: center;
      background-position-y: 0;
      background-repeat: no-repeat;
      position: relative;
    }

    /* Parallax effect on scroll */
    .news-hero__parallax {
      background-attachment: fixed;
    }

    .news-hero__animate-fade {
      animation: fadeIn 1s ease-out forwards;
    }

    .news-hero__animate-slide {
      animation: slide-right 0.8s ease-out 0.3s forwards;
      opacity: 0;
    }

    /* Mobile: disable parallax for better performance */
    @media (max-width: 768px) {
      .news-hero__parallax {
        background-attachment: scroll;
      }
    }
  </style>

  <section class="news-hero__background news-hero__parallax relative min-h-[360px] md:min-h-[360px] lg:min-h-[360px] flex items-center">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Content Container -->
    <div class="z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">

      <!-- Main Heading -->
      <h1 class="news-hero__animate-fade text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white max-w-4xl leading-tight">
        <?php echo esc_html($args['title']); ?>
      </h1>

      <!-- Breadcrumb Navigation -->
      <div class="news-hero__animate-slide absolute -bottom-2 pt-4 pb-2 px-6 bg-white rounded right-20 flex justify-start md:justify-end">
        <nav class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition-colors duration-300 px-6 py-3 rounded shadow-lg">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white font-medium hover:text-cyan-300 transition-colors duration-200">
            Home
          </a>
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
          <span class="text-white font-medium">
            <?php echo esc_html($args['subtitle']); ?>
          </span>
        </nav>
      </div>

    </div>

  </section>

  <script>
    // Intersection Observer for scroll animations
    let observerOption = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observerBloghero = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('news-hero__animate-fade');
        }
      });
    }, observerOption);

    // Observe animated elements
    document.addEventListener('DOMContentLoaded', () => {
      const animatedElements = document.querySelectorAll('.news-hero__animate-fade, .news-hero__animate-slide');
      animatedElements.forEach(el => observerBloghero.observe(el));
    });

    // Optional: Add smooth parallax effect on scroll
    let ticking = false;

    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const scrolled = window.pageYOffset;
          const heroSection = document.querySelector('.news-hero__background');

          if (heroSection && window.innerWidth > 768) {
            const parallaxSpeed = 0.5;
            heroSection.style.backgroundPositionY = `${scrolled * parallaxSpeed}px`;
          }

          ticking = false;
        });

        ticking = true;
      }
    });
  </script>
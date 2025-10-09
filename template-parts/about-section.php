<style>
  .animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .animate-fade-in-left {
    animation: fadeInLeft 0.8s ease-out forwards;
  }

  .animate-fade-in-right {
    animation: fadeInRight 0.8s ease-out forwards;
  }

  .animate-float {
    animation: float 3s ease-in-out infinite;
  }

  .delay-100 {
    animation-delay: 0.1s;
  }

  .delay-200 {
    animation-delay: 0.2s;
  }

  .delay-300 {
    animation-delay: 0.3s;
  }

  .delay-400 {
    animation-delay: 0.4s;
  }

  .delay-500 {
    animation-delay: 0.5s;
  }

  .pulse-ring::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: rgba(59, 130, 246, 0.3);
    animation: pulse-ring 2s ease-out infinite;
  }

  .image-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .image-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  }

  .btn-hover {
    transition: all 0.3s ease;
  }

  .btn-hover:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
  }

  .icon-hover {
    transition: all 0.3s ease;
  }

  .icon-hover:hover {
    transform: scale(1.1) rotate(5deg);
  }

  .scroll-to-top {
    transition: all 0.3s ease;
  }

  .scroll-to-top:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
  }

  /* Intersection Observer classes */
  .fade-in-section {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
  }

  .fade-in-section.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>
<section class="bg-gray-50 font-sans antialiased">

  <!-- About Us Section -->
  <section class="py-16 lg:pt-36 2xl:pt-52 px-4 md:px-8 lg:px-16 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Left Side - Images -->
      <div class="relative fade-in-section">
        <!-- Main Image Container -->
        <div class="relative">
          <!-- Top Image -->
          <div class="relative z-0">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/imgs/home/ff9952250900a121425bf46dfd61ee8035265f1d.png'; ?>"
              alt="Professional with holographic interface"
              class="w-full max-w-md rounded-3xl" />

            <!-- Experience Badge -->
            <!-- <div class="absolute -right-4 top-8 md:-right-8 md:top-12 bg-secondary text-white rounded-full p-6 shadow-xl z-20 animate-float">
              <div class="flex flex-col justify-between text-center relative pulse-ring">
                <div class="text-sm font-semibold mb-1 writing-mode-vertical transform -rotate-90 h-32 md:writing-mode-horizontal">
                  Years of<br class="md:hidden" /> Experience
                </div>
                <div class="text-4xl md:text-5xl font-bold">30</div>
              </div>
            </div> -->
          </div>

          <!-- Bottom Image -->
          <div class="absolute -bottom-12 right-8 md:-bottom-12 md:right-16 z-10">
            <img
              src="<?php echo get_template_directory_uri() . '/assets/imgs/home/Container (1).png'; ?>"
              alt="Developer working on code"
              class="rounded-3xl" />
          </div>
        </div>
      </div>

      <!-- Right Side - Content -->
      <div class="space-y-6 fade-in-section mt-10 lg:mt-0">
        <!-- About Us Badge -->
        <div class="flex items-center gap-2 text-secondary font-semibold">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="18" height="18" rx="2" transform="rotate(45 12 12)" />
          </svg>
          <span class="text-lg">About Us</span>
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="18" height="18" rx="2" transform="rotate(45 12 12)" />
          </svg>
        </div>

        <!-- Main Heading -->
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
          <span class="text-secondary">観光DXで収益向上</span>
        </h2>

        <!-- Description -->
        <p class="text-gray-600 text-base md:text-lg leading-relaxed">
          日本の観光業をテクノロジーで次の時代へ。  デジタルだけでなく、人と資産の力も合わせて、共に成長を実現します。
        </p>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
          <!-- Feature 1 -->
          <div class="flex items-center gap-4 group">
            <div class="flex-shrink-0 w-16 h-16 bg-cyan-400 rounded-full flex items-center justify-center icon-hover">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl text-center font-bold text-gray-900 mb-1">
				  <a href="/about/" data-text="私たちについて">
					  <span>私たちについて</span>
				  </a>
				</h3>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="flex items-center gap-4 group">
            <div class="flex-shrink-0 w-16 h-16 bg-cyan-400 rounded-full flex items-center justify-center icon-hover">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-900 mb-1">
				  <a href="/service/" data-text="私たちについて">
					  <span>サービスを見る</span>
				  </a>
				</h3>
            </div>
          </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 pt-6">
          <!-- More Information Button -->
          <a href="/contact/" data-text="問い合わせ" class="techin-btn relative bg-secondary text-white px-8 py-2 rounded-lg font-semibold text-lg btn-hover">
            <span>問い合わせ</span>
          </a>

          <!-- Call Us Button -->
          <!--           <div class="flex items-center gap-4 bg-white border-2 border-gray-200 px-6 py-2 rounded-lg btn-hover cursor-pointer">
            <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <div class="text-sm text-gray-600 font-medium">Call Us Any Time</div>
				<div class="text-lg font-bold text-gray-900">+(xxxx) yyyy zzzz</div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <script>
    // Intersection Observer for fade-in animations
    let observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.fade-in-section').forEach(el => {
      observer.observe(el);
    });
  </script>
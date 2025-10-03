<footer class="footer-section__gradient py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">

    <!-- Main Footer Content - Three Columns -->
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-12 lg:gap-16 mb-12">

      <!-- Left Column - Logo & Description -->
      <div class="space-y-6 col-span-3">
        <!-- Logo -->
        <div class="h-30 rounded-lg flex items-center justify-center p-4">
          <img
            src="http://code-com.xyz/synora/wp-content/uploads/2025/10/logo2.png"
            alt="Synora Logo"
            class="w-full h-full object-contain" />
        </div>

        <!-- Description -->
        <p class="text-white text-sm leading-relaxed opacity-90">
          日本の観光業をテクノロジーで次の時代へ。  デジタルだけでなく、人と資産の力も合わせて、共に成長を実現します。
        </p>
      </div>

      <!-- Middle Column - Quick Links -->
      <div class="space-y-6 col-span-2">
        <div>
          <h3 class="text-white text-xl font-bold mb-2">Quick Links</h3>
          <div class="w-16 h-1 bg-cyan-400 rounded"></div>
        </div>

        <nav class="space-y-3">
          <a href="#about" class="footer-section__link flex items-center gap-2 text-white hover:text-cyan-300 group">
            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
			  <span>会社上場</span>
          </a>

          <a href="#services" class="footer-section__link flex items-center gap-2 text-white hover:text-cyan-300 group">
            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
			  <span>ニュース</span>
          </a>

          <a href="#project" class="footer-section__link flex items-center gap-2 text-white hover:text-cyan-300 group">
            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
			  <span>問い合わせ</span>
          </a>
        </nav>
      </div>

      <!-- Right Column - Explore -->
      <div class="space-y-6 col-span-2">
        <div>
          <h3 class="text-white text-xl font-bold mb-2">Explore</h3>
          <div class="w-16 h-1 bg-cyan-400 rounded"></div>
        </div>

        <nav class="space-y-3">
          <a href="#what-we-do" class="footer-section__link flex items-center gap-2 text-white hover:text-cyan-300 group">
            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
			  <span>New1</span>
          </a>

          <a href="#offer" class="footer-section__link flex items-center gap-2 text-white hover:text-cyan-300 group">
            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
			  <span>New2</span>
          </a>
          <a href="#terms" class="footer-section__link flex items-center gap-2 text-white hover:text-cyan-300 group">
            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Terms & Condition</span>
          </a>
        </nav>
      </div>

    </div>

    <!-- Copyright Section -->
    <div class="pt-8 border-t border-white/20">
      <p class="text-white text-sm text-center">
        Copyright © <a href="#" class="text-cyan-400 hover:text-cyan-300 transition-colors duration-200">Synora</a>.
        All rights reserved by <a href="#" class="text-cyan-400 hover:text-cyan-300 transition-colors duration-200">Synora</a>.
      </p>
    </div>

  </div>
</footer>

<script>
  // Scroll animation observer for footer elements
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  // Observe footer columns with staggered animation
  document.addEventListener('DOMContentLoaded', () => {
    const columns = document.querySelectorAll('footer > div > div > div');
    columns.forEach((column, index) => {
      column.style.opacity = '0';
      column.style.transform = 'translateY(30px)';
      column.style.transition = `all 0.6s ease ${index * 0.15}s`;
      observer.observe(column);
    });
  });
</script>

</body>
<?php wp_footer();
?>

</html>
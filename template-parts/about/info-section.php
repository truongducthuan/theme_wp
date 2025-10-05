<style>
  /* Company Info Section Styles */
  .ci-gradient-card {
    background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .ci-gradient-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(79, 70, 229, 0.3);
  }

  .ci-label {
    color: #3B82F6;
    font-weight: 600;
    letter-spacing: 0.05em;
  }

  .ci-title-decoration {
    color: #3B82F6;
    font-size: 1.5rem;
    animation: ci-pulse 2s ease-in-out infinite;
  }

  .ci-image-container {
    position: relative;
    overflow: hidden;
    border-radius: 1.5rem;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  }

  .ci-image-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(79, 70, 229, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .ci-image-container:hover::before {
    opacity: 1;
  }

  .ci-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .ci-image-container:hover .ci-image {
    transform: scale(1.05);
  }

  .ci-card-text {
    font-size: 1.125rem;
    font-weight: 500;
  }

  .ci-animate-card {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
  }

  .ci-animate-card:nth-child(1) {
    animation-delay: 0.1s;
  }

  .ci-animate-card:nth-child(2) {
    animation-delay: 0.2s;
  }

  .ci-animate-card:nth-child(3) {
    animation-delay: 0.3s;
  }

  .ci-animate-card:nth-child(4) {
    animation-delay: 0.4s;
  }

  .ci-container-label {
    color: #9CA3AF;
    font-size: 0.875rem;
    font-weight: 500;
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }
</style>

<section class="bg-gray-50 py-8 lg:py-16 px-4 sm:px-6 lg:px-8">

  <!-- Main Container -->
  <div class="max-w-7xl mx-auto">

    <!-- Title Section -->
    <div class="text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-blue-900 inline-flex items-center gap-4">
        <span class="ci-title-decoration">◇</span>
        <span>会社情報</span>
        <span class="ci-title-decoration">◇</span>
      </h1>
    </div>

    <!-- Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-12 lg:gap-12 items-center">

      <!-- Left Column - Info Cards -->
      <div class="space-y-6">

        <!-- Card 1: Company Name -->
        <div class="ci-animate-card">
          <div class="ci-gradient-card rounded-2xl p-6 shadow-lg">
            <p class="text-white ci-card-text">会社名</p>
          </div>
        </div>

        <!-- Card 2: Establishment Date -->
        <div class="ci-animate-card">
          <div class="ci-gradient-card rounded-2xl p-6 shadow-lg">
            <p class="text-white ci-card-text">設立日</p>
          </div>
        </div>

        <!-- Card 3: Office Location -->
        <div class="ci-animate-card">
          <div class="ci-gradient-card rounded-2xl p-6 shadow-lg">
            <p class="text-white ci-card-text">本社・支社所在地</p>
          </div>
        </div>

        <!-- Card 4: Representative -->
        <div class="ci-animate-card">
          <div class="ci-gradient-card rounded-2xl p-6 shadow-lg">
            <p class="text-white ci-card-text">代表者</p>
          </div>
        </div>

      </div>

      <!-- Right Column - Image -->
      <div class="lg:sticky lg:top-8">
        <div class="ci-image-container aspect-[4/3]">
          <img
            src="<?php echo get_site_url() . '/wp-content/uploads/2025/10/TU-VAN-KHOI-NGHIEP-LAM-GIAU-NHANH-BEN-VUNG-1.png'; ?>"
            alt="Startup Business Concept"
            class="ci-image" />
        </div>
      </div>

    </div>

  </div>

</section>
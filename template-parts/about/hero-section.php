<style>
  /* Hero Section Specific Styles */
  .hero-section-bg {
    background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #0f1229 100%);
    position: relative;
    overflow: hidden;
  }

  .hero-section-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
      radial-gradient(circle at 20% 30%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(139, 92, 246, 0.08) 0%, transparent 50%);
    pointer-events: none;
  }

  .hero-title-text {
    text-shadow: 0 2px 20px rgba(255, 255, 255, 0.1);
    animation: fadeIn 1s ease-out;
  }

  .hero-image-container {
    animation: scaleIn 1.2s ease-out;
    position: relative;
  }

  .hero-image-glow {
    box-shadow:
      0 0 60px rgba(59, 130, 246, 0.2),
      0 20px 80px rgba(0, 0, 0, 0.4);
    transition: transform 0.5s ease, box-shadow 0.5s ease;
  }

  .hero-image-glow:hover {
    transform: scale(1.02);
    box-shadow:
      0 0 80px rgba(59, 130, 246, 0.3),
      0 25px 100px rgba(0, 0, 0, 0.5);
  }

  .hero-floating-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
  }

  .hero-particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(59, 130, 246, 0.6);
    border-radius: 50%;
    animation: heroFloat 6s infinite ease-in-out;
  }

  .hero-particle:nth-child(1) {
    left: 10%;
    top: 20%;
    animation-delay: 0s;
    animation-duration: 8s;
  }

  .hero-particle:nth-child(2) {
    left: 85%;
    top: 40%;
    animation-delay: 2s;
    animation-duration: 10s;
  }

  .hero-particle:nth-child(3) {
    left: 50%;
    top: 60%;
    animation-delay: 4s;
    animation-duration: 7s;
  }

  .hero-particle:nth-child(4) {
    left: 25%;
    top: 80%;
    animation-delay: 1s;
    animation-duration: 9s;
  }

  .hero-particle:nth-child(5) {
    left: 70%;
    top: 15%;
    animation-delay: 3s;
    animation-duration: 11s;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .hero-title-text {
      font-size: 1.5rem;
      line-height: 2rem;
    }
  }
</style>

<section class="hero-section-bg pt-16 lg:pt-26">
  <canvas id="networkCanvas" class="network-canvas"></canvas>

  <!-- Floating Particles Background -->
  <div class="hero-floating-particles">
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
  </div>

  <!-- Hero Section -->
  <section class="relative z-10 flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
    <h1 class="hero-title-text text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-8 sm:mb-12 lg:mb-16 max-w-6xl leading-relaxed">
      観光DXで未来を創る、私たちは観光業界の真のパートナーです。
    </h1>

    <!-- Hero Image Container -->
    <div class="hero-image-container w-full max-w-7xl px-4 sm:px-6">
      <div class="hero-image-glow rounded-3xl sm:rounded-[2.5rem] lg:rounded-[3rem] overflow-hidden">
        <img
          src="<?php echo get_site_url() . '/wp-content/uploads/2025/10/Union.png'; ?>"
          alt="観光DX - デジタルトランスフォーメーション会議室"
          class="w-full h-auto object-cover"
          loading="eager" />
      </div>
    </div>
  </section>
</section>
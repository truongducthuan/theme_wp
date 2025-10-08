<style>
  .hero-background::after {
    content: "";
    position: absolute;
    bottom: -50%;
    z-index: 10;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.5;
    filter: blur(2px);
    background: url(<?php echo get_template_directory_uri() . '/assets/imgs/bg-synora.png'; ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
  }

  .hero-background::before {
    content: "";
    position: absolute;
    top: 100%;
    /* z-index: 5; */
    left: 45%;
    width: 100%;
    height: 18%;
    background: linear-gradient(135deg, var(--fourth-color) 50%, var(--fourth-color) 100%);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }

  @media (max-width: 768px) {
    .hero-background::before {
      display: none;
    }
  }

  /* Hero Banner Specific Styles */
  .hero-background {}

  /* Animated grid pattern */
  .hero-grid {
    background-image:
      linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
      linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    animation: hero-grid-move 20s linear infinite;
  }

  @keyframes hero-grid-move {
    0% {
      transform: translate(0, 0);
    }

    100% {
      transform: translate(50px, 50px);
    }
  }

  /* Circuit lines animation */
  .hero-circuit-line {
    position: absolute;
    background: linear-gradient(90deg, transparent, rgba(59, 130, 246, .050), transparent);
    height: 2px;
    animation: hero-circuit-flow 3s ease-in-out infinite;
  }

  .hero-circuit-line:nth-child(1) {
    top: 20%;
    left: 0;
    width: 100%;
    animation-delay: 0s;
  }

  .hero-circuit-line:nth-child(2) {
    top: 50%;
    left: 0;
    width: 100%;
    animation-delay: 1s;
  }

  .hero-circuit-line:nth-child(3) {
    top: 80%;
    left: 0;
    width: 100%;
    animation-delay: 2s;
  }

  @keyframes hero-circuit-flow {

    0%,
    100% {
      opacity: 0;
      transform: translateX(-100%);
    }

    50% {
      opacity: 1;
      transform: translateX(0);
    }
  }

  /* Floating particles */
  .hero-particle {
    position: absolute;
    width: 4px;
    height: 4px;
    bottom: 0;
    background: rgba(59, 130, 246, 0.6);
    border-radius: 50%;
    animation: hero-particle-float 8s ease-in-out infinite;
    box-shadow: 0 0 10px rgba(59, 130, 246, 0.8);
  }

  @keyframes hero-particle-float {

    0%,
    100% {
      transform: translateY(0) translateX(0);
      opacity: 0;
    }

    10% {
      opacity: 1;
    }

    90% {
      opacity: 1;
    }

    100% {
      transform: translateY(-100vh) translateX(50px);
      opacity: 0;
    }
  }

  /* Image container with 3D effect */
  .hero-image-container {
    position: relative;
    perspective: 1000px;
    animation: hero-fade-in 1s ease-out;
  }

  @keyframes hero-fade-in {
    from {
      opacity: 0;
      transform: scale(0.9);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  .hero-image-frame {
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.5s ease;
  }

  .hero-image-frame:hover {
    transform: translateZ(20px) scale(1.02);
  }

  .hero-image-frame img {
    border-radius: 2rem;
    box-shadow:
      0 20px 60px rgba(0, 0, 0, 0.5),
      0 0 40px rgba(59, 130, 246, 0.3),
      inset 0 0 0 1px rgba(59, 130, 246, 0.2);
    transition: box-shadow 0.5s ease;
  }

  .hero-image-frame:hover img {
    box-shadow:
      0 30px 80px rgba(0, 0, 0, 0.6),
      0 0 60px rgba(59, 130, 246, 0.5),
      inset 0 0 0 1px rgba(59, 130, 246, 0.4);
  }

  /* Corner brackets */
  .hero-corner-bracket {
    position: absolute;
    width: 60px;
    height: 60px;
    border: 2px solid rgba(59, 130, 246, 0.6);
    pointer-events: none;
    animation: hero-bracket-pulse 2s ease-in-out infinite;
  }

  @keyframes hero-bracket-pulse {

    0%,
    100% {
      opacity: 0.6;
    }

    50% {
      opacity: 1;
    }
  }

  .hero-corner-bracket.top-left {
    top: -10px;
    left: -10px;
    border-right: none;
    border-bottom: none;
    border-radius: 1rem 0 0 0;
  }

  .hero-corner-bracket.top-right {
    top: -10px;
    right: -10px;
    border-left: none;
    border-bottom: none;
    border-radius: 0 1rem 0 0;
  }

  .hero-corner-bracket.bottom-left {
    bottom: -10px;
    left: -10px;
    border-right: none;
    border-top: none;
    border-radius: 0 0 0 1rem;
  }

  .hero-corner-bracket.bottom-right {
    bottom: -10px;
    right: -10px;
    border-left: none;
    border-top: none;
    border-radius: 0 0 1rem 0;
  }

  /* Glow effect overlay */
  .hero-glow-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    height: 80%;
    /* background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, transparent 70%); */
    pointer-events: none;
    animation: hero-glow-pulse 3s ease-in-out infinite;
  }

  @keyframes hero-glow-pulse {

    0%,
    100% {
      opacity: 0.5;
      transform: translate(-50%, -50%) scale(1);
    }

    50% {
      opacity: 1;
      transform: translate(-50%, -50%) scale(1.1);
    }
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .hero-corner-bracket {
      width: 40px;
      height: 40px;
    }

    .hero-image-frame img {
      border-radius: 1.5rem;
    }
  }
</style>

<section class="m-0 p-0">
  <section class="hero-background relative bg-fourth flex items-center justify-center px-4 py-12 md:py-20">
    <!-- Animated grid background -->
    <!-- <div class="hero-grid"></div> -->

    <!-- Circuit lines -->
    <div class="hero-circuit-line"></div>
    <div class="hero-circuit-line"></div>
    <div class="hero-circuit-line"></div>

    <!-- Floating particles -->
    <div class="hero-particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="hero-particle" style="left: 30%; animation-delay: 2s;"></div>
    <div class="hero-particle" style="left: 50%; animation-delay: 4s;"></div>
    <div class="hero-particle" style="left: 70%; animation-delay: 6s;"></div>
    <div class="hero-particle" style="left: 90%; animation-delay: 1s;"></div>
    <div class="hero-particle" style="left: 20%; animation-delay: 3s;"></div>
    <div class="hero-particle" style="left: 60%; animation-delay: 5s;"></div>
    <div class="hero-particle" style="left: 80%; animation-delay: 7s;"></div>

    <!-- Glow overlay -->
    <div class="hero-glow-overlay"></div>

    <!-- Main content -->
    <div class="hero-image-container mt-5 lg:mt-16 relative z-10 w-full max-w-5xl mx-auto">
      <div class="hero-image-frame relative">
        <!-- Corner brackets -->
        <!-- <div class="hero-corner-bracket top-left"></div>
        <div class="hero-corner-bracket top-right"></div>
        <div class="hero-corner-bracket bottom-left"></div>
        <div class="hero-corner-bracket bottom-right"></div> -->

        <!-- Main image -->
        <div>
          <h1 class="text-third line-height-2 text-4xl md:text-5xl lg:text-6xl font-bold">
            一緒に観光の未来を <br />作りましょう
          </h1>
          <div class="text-slate-700 mt-5 text-xl lg:text-2xl">Synoraでは、企業がデジタル時代において成長し続けられるよう、革新的なITソリューションとサービスを提供することに尽力しています。</div>
        </div>
      </div>
    </div>
  </section>
</section>
<style>
  /* Mission Vision Section Styles */
  .mv-section-bg {
    /* background: linear-gradient(135deg, #d4dce5 0%, #c5d0dd 100%); */
    position: relative;
    overflow: hidden;
  }

  .mv-section-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/imgs/about/13f72cd4f8bd35736d7686ef6221700f16ee341f (1).jpg');
    background-size: cover;
    background-position: center;
    opacity: 0.7;
    z-index: 0;
  }

  .mv-section-content {
    position: relative;
    z-index: 1;
  }

  /* Icon Circle Styles */
  .mv-icon-circle {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #5dceeb 0%, #4db8d8 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 24px rgba(93, 206, 235, 0.3);
    animation: mv-icon-pulse 3s ease-in-out infinite;
  }

  .mv-icon-circle svg {
    width: 40px;
    height: 40px;
    stroke: #1e3a5f;
    stroke-width: 2;
    fill: none;
  }

  /* Curved Path Styles */
  .mv-path-container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    z-index: 0;
  }

  .mv-path-svg {
    width: 100%;
    height: 100%;
  }

  .mv-path-line {
    stroke: rgba(255, 255, 255, 0.3);
    stroke-width: 2;
    fill: none;
    stroke-dasharray: 8, 8;
    animation: mv-path-dash 20s linear infinite;
  }

  /* Glowing Dots */
  .mv-glow-dot {
    position: absolute;
    width: 12px;
    height: 12px;
    background: radial-gradient(circle, #ffffff 0%, #5dceeb 50%, transparent 70%);
    border-radius: 50%;
    animation: mv-dot-glow 2s ease-in-out infinite;
    box-shadow: 0 0 20px rgba(93, 206, 235, 0.8);
  }

  /* Text Styles */
  .mv-text-content {
    line-height: 1.8;
    font-size: 18px;
    font-weight: 500;
  }

  .mv-heading {
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 0.05em;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .mv-icon-circle {
      width: 60px;
      height: 60px;
    }

    .mv-icon-circle svg {
      width: 30px;
      height: 30px;
    }

    .mv-text-content {
      font-size: 14px;
    }

    .mv-heading {
      font-size: 18px;
    }
  }

  /* Animation delays for dots */
  .mv-glow-dot:nth-child(1) {
    animation-delay: 0s;
  }

  .mv-glow-dot:nth-child(2) {
    animation-delay: 0.3s;
  }

  .mv-glow-dot:nth-child(3) {
    animation-delay: 0.6s;
  }

  .mv-glow-dot:nth-child(4) {
    animation-delay: 0.9s;
  }

  .mv-glow-dot:nth-child(5) {
    animation-delay: 1.2s;
  }

  .mv-glow-dot:nth-child(6) {
    animation-delay: 1.5s;
  }
</style>

<section id="mission" class="mv-section-bg py-12 px-4 md:py-20 md:px-8">
  <!-- Container Label -->
  <div class="mv-section-content max-w-7xl mx-auto">
    <!-- Decorative Path Container -->
    <div class="mv-path-container">
      <svg class="mv-path-svg" viewBox="0 0 1400 600" preserveAspectRatio="xMidYMid slice">
        Left curved path
        <path class="mv-path-line" d="M 200 80 Q 300 150, 350 250 T 450 400" />
        Right curved path
        <path class="mv-path-line" d="M 1200 80 Q 1100 150, 1050 250 T 950 400" />
        Center connecting path
        <path class="mv-path-line" d="M 450 200 Q 700 150, 950 200" />
      </svg>

      <!-- Glowing dots positioned along paths -->
      <div class="mv-glow-dot" style="top: 12%; left: 18%;"></div>
      <div class="mv-glow-dot" style="top: 20%; left: 25%;"></div>
      <div class="mv-glow-dot" style="top: 15%; left: 50%;"></div>
      <div class="mv-glow-dot" style="top: 95%; left: 75%;"></div>
      <div class="mv-glow-dot" style="top: 12%; left: 82%;"></div>
      <div class="mv-glow-dot" style="top: 90%; left: 35%;"></div>
    </div>

    <!-- Main Content Grid -->
    <div class="mv-section-content grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">

      <!-- Mission Section -->
      <div class="space-y-6">
        <!-- Mission Icon and Title -->
        <div class="flex items-center justify-center gap-4 mb-8">
          <div class="mv-icon-circle">
            <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-protect.svg'; ?>" />
          </div>
          <h2 class="mv-heading text-third">ミッション</h2>
        </div>

        <!-- Mission Text -->
        <div class="mv-text-content text-slate-600 space-y-4">
          <p>
            日本の観光業界に寄り添うDXパートナーとして、テクノロジーと人の力で観光の未来を共創する。
          </p>
          <p>
            私たちは単なるソフトウェア開発会社ではありません。人手不足、旧来のシステム、多様化する顧客ニーズといった業界特有の課題を共有し、共に解決策を見出す真のパートナーです。最先端のテクノロジー、特にAI技術を最大限に活用し、日本の観光事業者の業務最適化と収益最大化を実現するための具体的なソリューションを提供します。技術的な協力に留まらず、人材や資産といった面でもお客様の成長を力強くサポートし、共に新しい観光の時代を切り拓いていくことを約束します。
          </p>
        </div>
      </div>

      <!-- Vision Section -->
      <div class="space-y-6">
        <!-- Vision Icon and Title -->
        <div class="flex items-center justify-center gap-4 mb-8">
          <div class="mv-icon-circle">
            <img class="" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-hand.svg'; ?>" />
          </div>
          <h2 class="mv-heading text-third">ビジョン</h2>
        </div>

        <!-- Vision Text -->
        <div class="mv-text-content text-slate-600 space-y-4">
          <p>
            日本の観光DX革命をリードし、AI技術を中核的な原動力として、あらゆる観光事業者の飛躍を支援。世界中の旅行者に、ユニークでパーソナライズされた体験を創出する。
          </p>
          <p>
            私たちは、旅行代理店、ホテル・旅館からアクティビティ事業者まで、日本のすべての観光事業者がOTAへの依存から脱却し、顧客データを貴重な資産へと転換させ、自律的に未来を築いていける世界の実現を目指します。私たちのビジョンは、AIがプランニング、顧客対応、マーケティングに至るまで革新をもたらし、言語の壁を越えて国内外の旅行者に日本の観光の魅力を余すことなく伝える、スマートな観光エコシステムを構築することです。
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
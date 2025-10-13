<style>
  /* Member Section Custom Styles */
  .member-diamond {
    display: inline-block;
    width: 12px;
    height: 12px;
    background: linear-gradient(135deg, #3b82f6, #8b5cf6);
    transform: rotate(45deg);
    animation: rotatePulse 2s ease-in-out infinite;
  }

  .member-card {
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
  }

  .member-card:nth-child(1) {
    animation-delay: 0.2s;
  }

  .member-card:nth-child(2) {
    animation-delay: 0.4s;
  }

  .member-profile-img {
    transition: transform 0.3s ease;
  }

  .member-card:hover .member-profile-img {
    transform: scale(1.05);
  }

  .member-quote-mark {
    color: #22d3ee;
    font-size: 4rem;
    line-height: 1;
    font-family: Georgia, serif;
    animation: hideFadeIn 1s ease-out;
  }

  .member-content-left {
    animation: fadeInLeft 0.8s ease-out;
  }

  .member-heading-main {
    font-size: clamp(1.5rem, 4vw, 2.5rem);
    line-height: 1.3;
    font-weight: 700;
  }

  .member-text-body {
    color: #4b5563;
    line-height: 1.8;
  }

  .member-profile-circle {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid white;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .member-bg-cyan {
    background: linear-gradient(135deg, #22d3ee, #06b6d4);
  }

  .member-card-inner {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border-top-right-radius: 100px;
    border-bottom-right-radius: 26px;
  }

  /* .member-card-inner::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 15;
    background: linear-gradient(135deg, #3b82f6, #8b5cf6);
    clip-path: polygon(0 25%, 91% 37%, 100% 93%, 0 100%);
    border-radius: 16px;
  } */

  .member-card:hover .member-card-inner {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
  }

  .member-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 0.25rem;
  }

  .member-role {
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 0.5rem;
  }

  .member-university {
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 1rem;
  }

  .member-quote {
    font-size: 0.875rem;
    color: #4b5563;
    font-style: italic;
    line-height: 1.6;
  }
</style>

<div class="bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4">

  <!-- Member Introduction Section -->
  <div class="max-w-7xl mx-auto">

    <!-- Section Title -->
    <div class="text-center mb-16">
      <div class="flex items-center justify-center gap-4 mb-2">
        <span class="member-diamond"></span>
        <h1 class="text-4xl md:text-5xl font-bold text-third">メンバー紹介</h1>
        <span class="member-diamond"></span>
      </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

      <!-- Left Column - Text Content -->
      <div class="member-content-left space-y-6">

        <!-- CEO Name and Title -->
        <div class="mb-8">
          <div class="flex items-center justify-center lg:justify-start gap-3 mb-4">
            <span class="member-diamond"></span>
            <h2 class="text-lg font-semibold text-secondary">Ngo Van Dung — CEO</h2>
            <span class="member-diamond"></span>
          </div>

          <h3 class="member-heading-main text-gray-900 mb-6 text-center lg:text-start">
            旅は心のデータであり<br>DXはその記憶を次の時代へとつなぐ
			</h3>
        </div>
        <!-- Description Paragraphs -->
        <div class="space-y-4">
          <p class="member-text-body">
観光産業は「人と人」「文化と文化」をつなぐ架け橋です。
私たちはその架け橋を、デジタルの力でさらに強く、柔軟に、そして持続可能なものにしたいと考えています。
<br/>
近年、観光業界は大きな変革期を迎えています。
お客様のニーズは多様化し、体験の価値が重視される時代。
私たちのミッションは、DX（デジタルトランスフォーメーション）を通じて、観光事業者の「新しい価値創造」を支援することです。
<br/>
AI・クラウド・データ分析・モバイルソリューションなど、最新のテクノロジーを活用し、
予約・顧客管理・マーケティング・運営のすべてをシームレスにつなぐ観光DXプラットフォームを提供しています。
<br/>
「人の温かさ × デジタルの力」
この融合こそが、私たちが描く観光の未来です。
私たちは、地域と企業、そして旅行者をテクノロジーでつなぎ、
世界中の人々に“心に残る旅の体験”を届けていきます。
          </p>
        </div>
      </div>

      <!-- Right Column - Image CEO -->
      <div class="space-y-8">
        <div class="member-card">
          <img alt="CEO" src="<?php echo get_template_directory_uri() . '/assets/imgs/about/levandung.png'; ?>" />
        </div>
      </div>
    </div>

    <!-- Button Column - Member Cards -->
    <div class="flex flex-col lg:flex-row gap-5 lg:gap-24 mt-8 lg:mt-20 items-center justify-center">
      <!-- Member Card 1 - Ngo Van Dung -->
      <div class="member-card">
        <div class="member-card-inner">
          <div class="flex items-start gap-6">
            <!-- Profile Info -->
            <div class="flex-1 pt-2">
              <h4 class="member-name">Ngo Van Dung</h4>
              <p class="member-role">CEO</p>
              <p class="member-university">静岡大学電気電子学科</p>
              <p class="member-quote">"Không có việc gì khó, chỉ sợ có nhiều việc"</p>
            </div>
            <!-- Profile Image -->
            <div class="w-24 flex-shrink-0 member-profile-img">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/imgs/about/Container (2).png'; ?>"
                alt="Ngo Van Dung"
                class="w-full h-full object-cover" />
            </div>
          </div>
        </div>

        <!-- Quotation Mark -->
        <div class="flex justify-end pr-8 -mt-4">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-quote.svg'; ?>" class="member-quote-mark">
        </div>
      </div>

      <!-- Member Card 2 - LE DINH DUC -->
      <div class="member-card">
        <div class="member-card-inner">
          <div class="flex items-start gap-6">
            <!-- Profile Info -->
            <div class="flex-1 pt-2">
              <h4 class="member-name">Ngo Van Dung</h4>
              <p class="member-role">CEO</p>
              <p class="member-university">静岡大学電気電子学科</p>
              <p class="member-quote">旅は心のデータであり、DXはその記憶を次の時代へとつなぐ。</p>
            </div>
            <!-- Profile Image -->
            <div class="w-24 flex-shrink-0 member-profile-img">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/imgs/about/Container (2).png'; ?>"
                alt="Ngo Van Dung"
                class="w-full h-full object-cover" />
            </div>
          </div>
        </div>

        <!-- Quotation Mark -->
        <div class="flex justify-end pr-8 -mt-4">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-quote.svg'; ?>" class="member-quote-mark">
        </div>
      </div>

    </div>

  </div>

</div>
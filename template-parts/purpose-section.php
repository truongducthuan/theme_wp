<style>
  .purpose-section-float {
    animation: float 3s ease-in-out infinite;
  }

  .purpose-section-card {
    transition: all 0.3s ease;
  }

  .purpose-section-card:hover {
    /* transform: translateY(-8px); */
  }

  .purpose-section-fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }

  .purpose-section-fade-in.purpose-section-visible {
    opacity: 1;
    transform: translateY(0);
  }

  .purpose-section-icon-pulse {
    animation: pulse 2s ease-in-out infinite;
  }
</style>

<section class="py-4 px-4 md:py-24">
  <div class="max-w-7xl mx-auto">

    <!-- Section Header -->
    <div class="text-center mb-12 md:mb-16 purpose-section-fade-in">
      <div class="flex items-center justify-center gap-3 mb-4">
        <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="3" width="7" height="7" transform="rotate(45 7 7)" />
        </svg>
        <h2 class="text-2xl md:text-3xl font-bold text-blue-600">私たちの存在意義</h2>
        <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="3" width="7" height="7" transform="rotate(45 7 7)" />
        </svg>
      </div>
    </div>

    <!-- Main Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-16">

      <!-- Left Column -->
      <div class="lg:col-span-4 space-y-6">

        <!-- Card 01 -->
        <div class="purpose-section-card purpose-section-fade-in bg-white rounded-3xl p-6 shadow-lg relative" style="transition-delay: 0.1s;">
          <div class="absolute top-2 right-2 w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
            01
          </div>
          <div class="flex items-start gap-4 mb-4">
            <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                <circle cx="12" cy="12" r="2" />
              </svg>
            </div>
            <h3 class="text-lg md:text-xl font-bold text-gray-900 leading-tight">コアチームの開発速度が向上</h3>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">
            周辺業務や専門領域を弊社がサポートすることで、貴社のコアチームは最も重要な開発タスクに集中でき、生産性が飛躍的に向上します。
          </p>
        </div>

        <!-- Card 02 -->
        <div class="purpose-section-card purpose-section-fade-in bg-white rounded-3xl p-6 shadow-lg relative" style="transition-delay: 0.2s;">
          <div class="absolute top-2 right-2 w-12 h-12 bg-cyan-400 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
            02
          </div>
          <div class="flex items-start gap-4 mb-4">
            <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <h3 class="text-lg md:text-xl font-bold text-gray-900 leading-tight">専門領域の補完と負担軽減</h3>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">
            API連携、AI、クラウド基盤など、採用が難しい専門領域を弊社が補完。貴社チームが不得意な分野で起こる時間をなくします。
          </p>
        </div>

      </div>

      <!-- Center Column - Image with Overlapping Card -->
      <div class="lg:col-span-4 relative purpose-section-fade-in" style="transition-delay: 0.3s;">
        <div class="relative flex items-center justify-center">
          <img
            src="<?php echo get_site_url() . '/wp-content/uploads/2025/10/image_s1.png' ?>"
            alt="AI Handshake"
            class="w-full lg:w-5/6 h-auto rounded-3xl shadow-2xl purpose-section-float" />

          <!-- Overlapping Card 03 -->
          <div class="purpose-section-card absolute -bottom-48 lg:-bottom-56 left-1/2 transform -translate-x-1/2 w-full bg-white rounded-3xl p-6 shadow-2xl">
            <div class="absolute top-2 right-2 w-12 h-12 bg-cyan-400 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
              03
            </div>
            <div class="flex items-start gap-4 mb-3">
              <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <h3 class="text-base md:text-lg font-bold text-gray-900 leading-tight">エース人材のコア業務への集中</h3>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              貴社の最も貴重な資産である エース級エンジニアを、調査や管理業務から解放し、事業の未来を創る革新的な開発に集中させることができます。
            </p>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="lg:col-span-4 space-y-6 mt-[12rem] lg:mt-0">

        <!-- Card 04 -->
        <div class="purpose-section-card purpose-section-fade-in bg-white rounded-3xl p-6 shadow-lg relative" style="transition-delay: 0.4s;">
          <div class="absolute top-2 right-2 w-12 h-12 bg-cyan-400 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
            04
          </div>
          <div class="flex items-start gap-4 mb-4">
            <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
            <h3 class="text-lg md:text-xl font-bold text-gray-900 leading-tight">チーム全体の技術力向上</h3>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">
            共同開発やレビューを通じて、弊社の持つノウハウや技術が自然と貴社チームに共有され、チーム全体のスキルアップに貢献します。
          </p>
        </div>

        <!-- Card 05 -->
        <div class="purpose-section-card purpose-section-fade-in bg-white rounded-3xl p-6 shadow-lg relative" style="transition-delay: 0.5s;">
          <div class="absolute top-2 right-2 w-12 h-12 bg-cyan-400 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
            05
          </div>
          <div class="flex items-start gap-4 mb-4">
            <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-lg md:text-xl font-bold text-gray-900 leading-tight">柔軟なリソース戦略の実現</h3>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">
            「正社員採用」という重い決断の前に、まずは弊社のリソースで開発を加速。事業の成長に合わせて、柔軟に開発体制をスケールできます。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision Section -->
<div class="mt-0 lg:mt-16 2xl:mt-32 bg-third">
  <div class="max-w-7xl mx-auto flex items-center justify-center gap-2 lg:gap-24">
    <!-- Mission -->
    <div class="purpose-section-fade-in flex items-center gap-2 lg:gap-6 rounded-3xl p-2 lg:p-8 purpose-section-card" style="transition-delay: 0.6s;">
      <div class="w-10 lg:w-16 h-10 lg:h-16 bg-cyan-400 rounded-full flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
        <svg class="w-4 lg:w-6 h-4 lg:h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
        </svg>
      </div>
      <h3 class="text-sm md:text-2xl font-bold text-gray-900">ミッション</h3>
    </div>

    <!-- Vision -->
    <div class="purpose-section-fade-in flex items-center gap-2 lg:gap-6 rounded-3xl p-2 lg:p-8 purpose-section-card" style="transition-delay: 0.7s;">
      <div class="w-10 lg:w-16 h-10 lg:h-16 bg-cyan-400 rounded-full flex items-center justify-center flex-shrink-0 purpose-section-icon-pulse">
        <svg class="w-4 lg:w-6 h-4 lg:h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
        </svg>
      </div>
      <h3 class="text-sm md:text-2xl font-bold text-gray-900">ビジョン</h3>
    </div>
  </div>
</div>

<script>
  const observerPurpose = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('purpose-section-visible');
      }
    });
  }, observerOptions);

  // Observe all fade-in elements
  document.querySelectorAll('.purpose-section-fade-in').forEach(el => {
    observerPurpose.observe(el);
  });
</script>
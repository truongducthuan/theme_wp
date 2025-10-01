<style>
  /* Minimal custom CSS - only for accordion animation that Tailwind can't handle */
  .process-flow-accordion__content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
  }

  .process-flow-accordion__content.process-flow-accordion__content--open {
    max-height: 500px;
    transition: max-height 0.4s ease-in;
  }

  /* Smooth rotation for chevron icon */
  .process-flow-accordion__icon {
    transition: transform 0.3s ease;
  }

  .process-flow-accordion__icon--rotated {
    transform: rotate(180deg);
  }

  /* Floating animation for image */
  @keyframes process-flow-float {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-20px);
    }
  }

  .process-flow-image--animated {
    animation: process-flow-float 6s ease-in-out infinite;
  }
</style>

<section id="service-flow" class="py-16 lg:py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-purple-50 to-white">
  <div class="max-w-7xl mx-auto">

    <!-- Header -->
    <div class="text-center mb-12">
      <div class="flex items-center justify-center gap-3 mb-6">
        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
        </svg>
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-600">サービス展開の流れ</h2>
        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
        </svg>
      </div>
      <p class="text-base sm:text-lg text-gray-700 leading-relaxed max-w-6xl mx-auto">
        私たちのサービスは、ただのシステム導入ではなく、貴社のビジネス課題を深く理解し、共に解決していくプロセスです。初期のご相談から企画、開発、運用、そして継続的な改善まで、一貫して伴走します。明確なステップを通じて、安心してDXを推進できるようサポートいたします。
      </p>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">

      <!-- Left Column - Accordion -->
      <div class="space-y-4">

        <!-- Accordion Item 1 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl">
          <button
            class="w-full px-6 py-5 flex items-center justify-between text-left group"
            onclick="toggleAccordion(this)"
            aria-expanded="false">
            <span class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
              無料相談（課題の共有
            </span>
            <div class="flex-shrink-0 w-12 h-12 bg-cyan-400 rounded-lg flex items-center justify-center group-hover:bg-cyan-500 transition-colors duration-300">
              <svg class="w-6 h-6 text-white process-flow-accordion__icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </button>
          <div class="process-flow-accordion__content">
            <div class="px-6 pb-5 text-gray-600 leading-relaxed">
              まずは貴社の現状や課題をお聞かせください。無料相談では、ビジネス目標や技術的な課題を共有し、最適なソリューションの方向性を一緒に探ります。
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl">
          <button
            class="w-full px-6 py-5 flex items-center justify-between text-left group"
            onclick="toggleAccordion(this)"
            aria-expanded="false">
            <span class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
              ご提案（支援体制の設計）
            </span>
            <div class="flex-shrink-0 w-12 h-12 bg-cyan-400 rounded-lg flex items-center justify-center group-hover:bg-cyan-500 transition-colors duration-300">
              <svg class="w-6 h-6 text-white process-flow-accordion__icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </button>
          <div class="process-flow-accordion__content">
            <div class="px-6 pb-5 text-gray-600 leading-relaxed">
              課題分析に基づき、具体的なソリューションと支援体制をご提案します。プロジェクトのスコープ、スケジュール、必要なリソースを明確にし、最適なアプローチを設計します。
            </div>
          </div>
        </div>

        <!-- Accordion Item 3 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl">
          <button
            class="w-full px-6 py-5 flex items-center justify-between text-left group"
            onclick="toggleAccordion(this)"
            aria-expanded="false">
            <span class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
              契約・チーム組成
            </span>
            <div class="flex-shrink-0 w-12 h-12 bg-cyan-400 rounded-lg flex items-center justify-center group-hover:bg-cyan-500 transition-colors duration-300">
              <svg class="w-6 h-6 text-white process-flow-accordion__icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </button>
          <div class="process-flow-accordion__content">
            <div class="px-6 pb-5 text-gray-600 leading-relaxed">
              ご提案内容にご納得いただけましたら、正式に契約を締結し、プロジェクトチームを組成します。貴社のニーズに最適なスキルを持つ専門家をアサインします。
            </div>
          </div>
        </div>

        <!-- Accordion Item 4 -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl">
          <button
            class="w-full px-6 py-5 flex items-center justify-between text-left group"
            onclick="toggleAccordion(this)"
            aria-expanded="false">
            <span class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
              支援開始
            </span>
            <div class="flex-shrink-0 w-12 h-12 bg-cyan-400 rounded-lg flex items-center justify-center group-hover:bg-cyan-500 transition-colors duration-300">
              <svg class="w-6 h-6 text-white process-flow-accordion__icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </button>
          <div class="process-flow-accordion__content">
            <div class="px-6 pb-5 text-gray-600 leading-relaxed">
              プロジェクトがスタートします。開発、運用、改善のサイクルを通じて、継続的に貴社のDX推進をサポートします。定期的なレビューと柔軟な対応で、確実に成果を出します。
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column - Image -->
      <div class="relative">
        <div class="process-flow-image--animated">
          <img
            src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%202025-10-01%20at%2016.48.36-2jYQWmykEErO5GW7i9I5Tgn1o5d9uR.png"
            alt="Digital transformation process visualization"
            class="w-full h-auto rounded-3xl shadow-2xl object-cover" />
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  function toggleAccordion(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.process-flow-accordion__icon');
    const isOpen = button.getAttribute('aria-expanded') === 'true';

    // Close all other accordions
    document.querySelectorAll('[aria-expanded="true"]').forEach(openButton => {
      if (openButton !== button) {
        openButton.setAttribute('aria-expanded', 'false');
        openButton.nextElementSibling.classList.remove('process-flow-accordion__content--open');
        openButton.querySelector('.process-flow-accordion__icon').classList.remove('process-flow-accordion__icon--rotated');
      }
    });

    // Toggle current accordion
    if (isOpen) {
      button.setAttribute('aria-expanded', 'false');
      content.classList.remove('process-flow-accordion__content--open');
      icon.classList.remove('process-flow-accordion__icon--rotated');
    } else {
      button.setAttribute('aria-expanded', 'true');
      content.classList.add('process-flow-accordion__content--open');
      icon.classList.add('process-flow-accordion__icon--rotated');
    }
  }

  // Observe accordion items
  document.querySelectorAll('#service-flow .bg-white.rounded-2xl').forEach((item, index) => {
    // item.style.opacity = '0';
    item.style.transform = 'translateY(30px)';
    item.style.transition = `all 0.6s ease ${index * 0.1}s`;
    observer.observe(item);
  });
</script>
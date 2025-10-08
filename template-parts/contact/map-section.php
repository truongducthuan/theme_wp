<style>
  /* Access Section Custom Styles */
  .access-container {
    animation: access-fade-in 0.8s ease-out;
  }

  .access-text-content {
    animation: access-slide-in-left 0.8s ease-out;
  }

  .access-map-container {
    animation: access-slide-in-right 0.8s ease-out 0.2s backwards;
  }

  .access-map-frame {
    border: 4px solid #3b82f6;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);
    transition: all 0.3s ease;
  }

  .access-map-frame:hover {
    box-shadow: 0 15px 40px rgba(59, 130, 246, 0.3);
    transform: translateY(-2px);
  }

  .access-link:hover {
    color: #2563eb;
    text-decoration: underline;
  }

  @keyframes access-fade-in {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes access-slide-in-left {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes access-slide-in-right {
    from {
      opacity: 0;
      transform: translateX(30px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .access-map-frame {
      border-width: 3px;
    }
  }
</style>

<section class="bg-fourth flex items-center justify-center py-5 lg:py-16 p-4 md:p-8">

  <div class="access-container w-full max-w-7xl px-4 md:px-8 lg:px-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

      <!-- Left Column: Text Content -->
      <div class="access-text-content space-y-4">
        <h2 class="text-xl md:text-2xl mb-6">
          <span class="text-secondary font-medium">アクセス・お問い合わせ</span>
        </h2>

        <div class="space-y-3 text-gray-700 leading-relaxed">
          <p class="text-sm md:text-base">
            私たちは最新テクノロジーを活用し、観光DX事業者様を支援しています。
          </p>
          <p class="text-sm md:text-base">
            所在地や詳細情報は下記のマップをご確認ください。
          </p>
          <p class="text-sm md:text-base">
            またはお気軽にお問い合わせください。
          </p>
        </div>
      </div>

      <!-- Right Column: Map -->
      <div class="access-map-container">
        <div class="access-map-frame">
          <!-- Google Maps Embed -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0969739437937!2d105.78252631540255!3d21.028810793634744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd0c66f05%3A0xea31563511af2e8!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1234567890123!5m2!1svi!2s"
            width="100%"
            height="350"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="w-full h-[300px] md:h-[350px] lg:h-[400px]">
          </iframe>
        </div>

        <!-- Map Info Badge -->
        <div class="mt-4 flex items-center justify-center gap-2 text-sm text-gray-600">
          <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
          </svg>
          <span>クリックして詳細な地図を表示</span>
        </div>
      </div>

    </div>
  </div>

</section>
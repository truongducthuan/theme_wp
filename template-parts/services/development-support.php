<style>
  .news-hero__background {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/bg-support.png'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow: hidden;
    animation: services-gradient-shift 15s ease infinite;
  }

  @keyframes services-gradient-shift {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  .news-hero__background::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(2px);
    z-index: 1;
  }

  .news-hero__background>* {
    position: relative;
    z-index: 2;
  }

  /* Floating particles */
  .hero-particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(59, 130, 246, 0.6);
    border-radius: 50%;
    animation: hero-particle-float 8s ease-in-out infinite;
    box-shadow: 0 0 10px rgba(59, 130, 246, 0.8);
    bottom: 10%;
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

  .developed-card {
    opacity: 0;
    transition: all 0.3s ease;
  }

  .developed-card.visible {
    animation: fadeInUp 0.6s ease-out forwards;
  }
</style>

<?php
$services = [
  [
    'id' => 1,
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/icon-setting-pc.svg',
    'title' => 'ベトナムオフショア開発',
    'description' => '深刻な人材不足を抱える日本の観光・旅行業界様へ。ベトナムオフショア開発で、ラボ型・受託開発の選択肢により貴社の観光DXを迅速に実現します。',
    'features' => [
      '専属開発センターの構築<br />（ラボ型開発モデル）',
      'エンドツーエンドのプロジェクト開発<br />（受託開発モデル）',
      'IT人材の増強・補強<br />（スタッフ・オーグメンテーション）',
      '保守・運用サポートサービス'
    ]
  ],
  [
    'id' => 2,
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg',
    'title' => '観光業特化とした・WEBシステム／アプリ開発・SaaS開発支援',
    'description' => '観光業界特化の知見で、企画・PoC（デモ作成）から本格開発・運用まで、貴社の新規WebシステムやSaaSプロダクト開発をトータルで成功に導きます。',
    'features' => [
      'インフラの移行と最適化',
      'アプリケーションの近代化',
      '旅行会社向けB2B <br />  &emsp;SaaSプロダクトの開発支援',
      ' データベースとデータの移行',
      'クラウド基盤構築とガバナンス'
    ]
  ],
  [
    'id' => 3,
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/icon-protect-pc.svg',
    'title' => 'クラウド移行',
    'description' => 'レガシーシステムから脱却したい大手旅行・観光企業様へ。AWS/Azureなどのクラウド技術で、既存システムの移行・刷新を支援し、強靭でスケーラブルなIT基盤を構築します。',
    'features' => [
      '戦略・企画フェーズ支援',
      'Webシステム・アプリ開発',
      'SaaSプロダクト開発支援',
      '運用・保守・品質管理'
    ]
  ],
]
?>

<section class="news-hero__background pb-10 md:pb-20">
  <!-- Floating particles -->
  <div class="hero-particle" style="left: 10%; animation-delay: 0s;"></div>
  <div class="hero-particle" style="left: 30%; animation-delay: 2s;"></div>
  <div class="hero-particle" style="left: 50%; animation-delay: 4s;"></div>
  <div class="hero-particle" style="left: 70%; animation-delay: 6s;"></div>
  <div class="hero-particle" style="left: 90%; animation-delay: 1s;"></div>
  <div class="hero-particle" style="left: 20%; animation-delay: 3s;"></div>
  <div class="hero-particle" style="left: 60%; animation-delay: 5s;"></div>
  <div class="hero-particle" style="left: 80%; animation-delay: 7s;"></div>

  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => '提供サービス', 'sub-title' => 'コンセプト策定からフルスクラッチ開発、グロース支援まで、貴社のビジネスに最適な観光DXをワンストップでご提供。']); ?>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
    <?php
    foreach ($services as $service) {
    ?>
      <div class="developed-card h-full bg-secondary rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center justify-between text-center">
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 mb-6 flex items-center justify-center bg-secondary rounded-[10px]">
              <img alt="icon" src="<?php echo $service['icon']; ?>" />
            </div>
            <h3 class="text-lg font-bold mb-2 text-[#222627]"><?php echo $service['title']; ?></h3>
            <p class="mb-2 text-[#222627]"><?php echo $service['description']; ?></p>
            <p>
            <ul class="text-left mb-4 text-[#222627]">
              <?php foreach ($service['features'] as $feature) {
                echo '<li>✅ ' . $feature . '</li>';
              } ?>
            </ul>
          </div>
          <a
            href="<?php echo home_url('/vietnam-offshore'); ?>"
            class="mt-auto bg-secondary text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
            もっと詳しく
          </a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>

<script>
  let observerOptionDeveloped = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observerServicesDeveloped = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, index * 100);
      }
    });
  }, observerOptionDeveloped);

  // Observe all service cards
  document.querySelectorAll('.developed-card').forEach(card => {
    observerServicesDeveloped.observe(card);
  });
</script>
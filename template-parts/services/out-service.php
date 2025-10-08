<style>
  #out-service {
    background: url(<?php echo get_template_directory_uri() . '/assets/imgs/bg-synora.png'; ?>);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
  }

  .service-box:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
  }
</style>

<section id="out-service" class="max-w-7xl pt-12 lg:pt-20 mx-auto">
  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => '私たちのサービス - 観光DX開発支援', 'sub-title' => '私たちは単なるソフトウェア会社ではなく、観光業界に特化した伴走型の技術パートナーです。']); ?>

  <div class="w-full grid grid-cols-1 gap-1 px-3 pb-10 md:pb-16 md:grid-cols-3">
    <div class="min-h-36 flex flex-col gap-y-6 px-3">
      <div class="service-box rounded-[20px] py-10 pl-8 pr-4 bg-fourth/70 relative">
        <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">01</div>
        <div class="flex gap-4 items-center mb-6">
          <div class="w-[70px] h-[70px] flex items-center justify-center bg-secondary rounded-[10px]">
            <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-user-call.svg'; ?>" />
          </div>
          <h4 class="flex-1 text-slate-700 text:lg md:text-xl font-bold">増え続ける技術的複雑性</h4>
        </div>
        <p class="text-sm text-[#616669]">観光業界の複雑な商慣習や業務フローを理解し、それをシステムに落とし込む作業は、チームに高い専門性を要求し、新規メンバーのキャッチアップを困難にします。</p>
      </div>
      <div class="service-box rounded-[20px] py-10 pl-8 pr-4 bg-fourth/70 relative">
        <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">02</div>
        <div class="flex gap-4 items-center mb-6">
          <div class="w-[70px] h-[70px] flex items-center justify-center bg-secondary rounded-[10px]">
            <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-service.svg'; ?>" />
          </div>
          <h4 class="flex-1 text-slate-700 text-lg font-bold">求められる高度なドメイン知識</h4>
        </div>
        <p class="text-sm text-[#616669]">観光業界の複雑な商慣習や業務フローを理解し、それをシステムに落とし込む作業は、チームに高い専門性を要求し、新規メンバーのキャッチアップを困難にします。</p>
      </div>
    </div>
    <div class="min-h-36 flex items-center justify-center py-5 md:py-0">
      <img
        src="<?php echo get_template_directory_uri() . '/assets/imgs/services/image-services-out.jpg'; ?>"
        alt="Icon"
        style="animation: mv-icon-pulse 2s infinite ease-in-out"
        class="w-[376px] h-auto object-cover rounded-[30px]" />

    </div>
    <div class="min-h-36 flex flex-col gap-y-6 px-3">
      <div class="service-box rounded-[20px] py-10 pl-8 pr-4 bg-fourth/80 relative">
        <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">03</div>
        <div class="flex gap-4 items-center mb-6">
          <div class="w-[70px] h-[70px] flex items-center justify-center bg-secondary rounded-[10px]">
            <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-user-message.svg'; ?>" />
          </div>
          <h4 class="flex-1 text-slate-700 text-xl font-bold">内製チーム強化の必要性</h4>
        </div>
        <p class="text-sm text-[#616669]">ビジネスのスピードを上げるには、開発チームの内製化が理想です。しかし、優秀な人材の採用は困難を極め、自社だけでチームをスケールさせることには限界があります。</p>
      </div>
      <div class="service-box rounded-[20px] py-10 pl-8 pr-4 bg-fourth/70 relative">
        <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">04</div>
        <div class="flex gap-4 items-center mb-6">
          <div class="w-[70px] h-[70px] flex items-center justify-center bg-secondary rounded-[10px]">
            <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-service.svg'; ?>" />
          </div>
          <h4 class="flex-1 text-slate-700 text-lg font-bold">恒常的なリソースの制約</h4>
        </div>
        <p class="text-sm text-[#616669]">既存システムの運用保守や、細かな改修依頼に対応する中で、次世代プロダクトの開発や、大規模なリファクタリングといった、重要だが緊急ではないタスクが後回しになりがちです。</p>
      </div>
    </div>
  </div>
</section>
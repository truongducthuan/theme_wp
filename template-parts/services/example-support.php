<section class="pb-16">
  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => '協業による「支援」事例', 'sub-title' => '']); ?>

  <div class="grid md:grid-cols-2 gap-8 items-center">
    <!-- Left-->
    <div class="flex justify-center">
      <img
        src="<?php echo get_template_directory_uri() . '/assets/imgs/services/example-support.jpg'; ?>"
        alt="Handshake"
        class="w-full max-w-sm rounded-[2rem] shadow-lg object-cover" />
    </div>

    <!-- right -->
    <div class="h-full bg-white border border-[#D0E3FF] rounded-2xl p-8 shadow-md flex flex-col justify-between">
      <div>
        <h3 class="text-lg md:text-xl font-semibold mb-4 text-gray-900">
          【大手旅行会社様：予約システム内製化の伴走支援】
        </h3>

        <span class="text-gray-600 mb-4 leading-relaxed text-center">
          <p>直面していた課題</p>
          <p>将来の事業戦略のために外部パッケージから脱却し、自社予約システムの内製化を推進。</p>
          <p>しかし、観光領域特有の大規模システムに対応できるノウハウとリソースが不足し、プロジェクトは停滞していた。</p>
        </span>

        <div class="flex-1 flex flex-col gap-4 text-black bg-[#F5F4FF] px-10 py-4 mt-3 rounded-[10px] relative">
          <img class="w-52 h-auto absolute top-0 right-0" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/services/image-star.png'; ?>" />
          <div class="w-full flex gap-3">
            <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
            <p>弊社の支援内容</p>
          </div>
          <div class="flex gap-3">
            <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
            <p>役割強化：貴社PMの右腕としてテックリードをアサインし、オフショアを含む混成チームを組成</p>
          </div>
          <div class="flex gap-3">
            <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
            <p>技術支援：複雑な料金エンジン設計や外部システム連携部分における設計・実装をサポート。</p>
          </div>
          <div class="flex gap-3">
            <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
            <p>支援による効果</p>
          </div>
          <div class="flex gap-3">
            <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
            <p>内製化支援：共同開発を通じて設計思想やレビュー手法を共有し、プロジェクト完了後に自走できる体制を構築。</p>
          </div>
        </div>
      </div>

      <div class="mt-8 text-center">
        <a
          href="#"
          class=" w-full inline-block bg-gradient-to-r from-[#3B82F6] to-[#2563EB] text-white font-semibold px-8 py-3 shadow hover:opacity-90 transition">
          無料相談を予約する
        </a>
      </div>
    </div>
  </div>
</section>
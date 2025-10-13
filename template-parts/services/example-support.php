<section class="pb-5 md:pb-16 max-w-7xl mx-auto">
  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => '協業による「支援」事例', 'sub-title' => '']); ?>

  <div class="grid grid-cols-1 lg:grid-cols-3 px-5 lg:px-0  gap-8 items-center">
    <!-- Left-->
    <div class="col-span-1 flex justify-center hero-image">
      <img
        src="<?php echo get_template_directory_uri() . '/assets/imgs/services/example-support.jpg'; ?>"
        alt="Handshake"
        class="w-full max-w-sm rounded-[2rem] shadow-lg object-cover" />
    </div>

    <!-- right -->
    <div class="col-span-1 lg:col-span-2 h-full bg-white border border-[#D0E3FF] rounded-2xl p-4 lg:p-8 shadow-md flex flex-col justify-between">
      <!-- <div> -->
      <h3 class="text-lg md:text-2xl text-center font-bold mb-4 text-gray-900">
        【中小旅行会社様：複合予約プラットフォーム構築支援】
      </h3>

      <span class="text-gray-600 mb-4 leading-relaxed text-center">
        <p class="text-lg font-bold">直面していた課題:</p>
			<blockquote>
			  <p>社内にITの専門知識や開発ノウハウがなく、ビジネスアイデアを具体的なシステム要件に落とし込むことが困難な状況でした。さらに、プロジェクトを推進できる技術担当者も不足していたため、計画は構想段階で停滞していました。</p>
			</blockquote>
      </span>

      <div class="flex-1 flex flex-col gap-4 text-black bg-[#F5F4FF] px-2 lg:px-10 py-4 mt-3 rounded-[10px] relative">
        <img class="w-52 h-auto absolute top-0 right-0" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/services/image-star.png'; ?>" />
        <div class="w-full flex gap-3">
          <p class="text-lg font-bold">弊社の支援内容</p>
        </div>
        <div class="flex gap-3">
          <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
          <p>二人三脚のパートナー体制で、アイデアを形に：観光ビジネスとITの両方に精通した担当者が、貴社のパートナーとしてビジネスの課題やアイデアを整理し、収益に繋がる具体的なITの活用方法を一緒に考えます。</p>
        </div>
        <div class="flex gap-3">
          <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
          <p>経験豊富な開発者が、計画をシステムとして実現：考え出した計画を、高い技術力を持つエンジニアが迅速かつ高品質なシステムとして形にします。</p>
        </div>
		  <div class="w-full flex gap-3">
          <p class="text-lg font-bold">支援による効果</p>
        </div>
        <div class="flex gap-3">
          <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
          <p>ITの専門知識がなくても安心：お客様はビジネスのアイデアに集中していただけます。複雑な技術部分は私たちが分かりやすく説明し、最適な形に落とし込みます。</p>
        </div>
		  <div class="flex gap-3">
			  <img class="w-4 h-auto" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-check.svg'; ?>" />
			  <p>最小限のチームで、最大限の効果を：限られたリソースの中で、事業の成長に直結する最も重要な機能から開発します。IT人材を自社で採用する必要なく、すぐにプロジェクトを開始できます。</p>
        </div>
      </div>
      <!-- </div> -->

      <div class="mt-8 text-center">
        <a
          href="#"
          data-text="無料相談を予約する"
          class="techin-btn relative w-full rounded-2xl inline-block bg-gradient-to-r from-secondary to-primary text-white font-semibold px-8 py-3 shadow hover:opacity-90 transition">
          <span>無料相談を予約する</span>
        </a>
      </div>
    </div>
  </div>
</section>
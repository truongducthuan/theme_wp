<?php
$data = [
  [
    'id' => 1,
    'title' => '無料相談（課題の共有',
    'desc' => '貴社チームが抱える課題や、目指す姿についてヒアリング。最適な支援の形を共に探ります。'
  ],
  [
    'id' => 2,
    'title' => 'ご提案（支援体制の設計）',
    'desc' => '課題解決に最適な支援形態（ラボ、プロジェクト等）と、貴社チームにフィットする体制をご提案します。'
  ],
  [
    'id' => 3,
    'title' => ' 契約・チーム組成',
    'desc' => '契約締結後、アサインメンバーとの顔合わせ・キックオフを実施。円滑な協業開始を準備します。'
  ],
  [
    'id' => 4,
    'title' => '支援開始',
    'desc' => '貴社チームの一員として、合意したプロセスに則り、開発支援を開始します。'
  ]
]
?>

<section class="max-w-7xl mx-auto mt-5 md:mt-16 md:px-10 lg:px-20">
  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => 'サービス展開の流れ', 'sub-title' => '私たちのサービスは、ただのシステム導入ではなく、貴社のビジネス課題を深く理解し、共に解決していくプロセスです。初期のご相談から企画、開発、運用、そして継続的な改善まで、一貫して伴走します。明確なステップを通じて、安心してDXを推進できるようサポートいたします。']); ?>

  <div class="w-full flex flex-col items-center justify-center  px-3 pb-16">
    <div class="w-full lg:w-3/4 flex flex-col items-center justify-center gap-12">
      <?php foreach ($data as $item) : ?>
        <div class="h-20 w-full flex justify-between items-center gap-2 md:gap-4">
          <div class="w-10 h-10 rounded-full flex items-center justify-center bg-secondary text-base font-bold md:text-2xl md:w-16 md:h-16">0<?php echo $item['id']; ?></div>
          <div class="relative flex-1 h-full flex flex-col items-center justify-center gap-1 text-sm text-white font-bold rounded-lg bg-secondary p-2 md:h-full md:w-[120px] md:text-xl md:gap-4 md:px-7 md:py-4 md:rounded-[20px]">
            <p><?php echo $item['title']; ?></p>
            <p class="text-sm"><?php echo $item['desc']; ?></p>

            <div class="absolute left-1/2 -translate-x-1/2 top-full h-8 w-8 rounded bg-third flex items-center justify-center md:h-10 md:w-10">
              <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-top-arrow.svg'; ?>" />
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
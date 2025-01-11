<?php 
/**
 * Template Name: Our Business
 */

 get_header();
?>

<style>
  @media (max-width: 768px) {
    .gradient-text {
      /* font-size: 3rem; */
    }
  }
</style>

<section>
  <div class="relative">
    <div class="flex absolute -left-1 top-0 flex-col mt-[80px] mb-[80px] w-[46%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto px-5 md:px-0 pt-32 md:pt-60 z-10 relative text-[#B2B2B2]">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-5 md:mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full" 
      ></div>
      <div class="self-stretch my-auto text-sm md:text-base">事業内容</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-4xl md:text-8xl text-white uppercase">Our Business</div>
      </div>
    </div>
    <div class="text-white mt-8 text-lg md:text-3xl leading-6 md:leading-10">
    キャッチコピーが入ります。<br >
    キャッチコピーが入ります。 
    </div>
    <div class="text-sm md:text-base mt-8">
    お客様のニーズに合わせて、ITを中心とするご支援を行っております。<br />
    お客様の先にいる「人」を想像して、関わる「人」全員が豊かになれるシステム作りを信条としています。
    </div>
    <div class="flex justify-end items-end gap-4 mt-5 md:mt-20 mb-10 w-full text-white"><span>Top -</span><p>事業内容</p></div>
  </div>

  <!-- DEVELOPMENT -->
  <div class="relative pb-24 md:pb-64">
    <div class="max-w-[1200px] mx-auto text-white relative z-20 px-5 md:px-0">
      <div class="w-full bg-[#B2B2B2] h-[1px]"></div>
      <div class="">
        <h4 class="my-5">アプリ/システム開発</h4>
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-5">
          <h1 class="text-3xl md:text-5xl uppercase font-bold tracking-widest flex-1">development</h1>
          <div class="flex-1">お客様のビジネスニーズを深く理解し、外部サービス導入・ノーコードツール開発・スクラッチ開発等、経験豊富なメンバーがご支援</div>
        </div>
        <div>
          <?php 
          $development = get_field('development');
          // echo '<pre>';
          // print_r($development['list_content']);
          // echo '</pre>';
          if (!empty($development)):
          ?>
            <?php
            if(!empty($development['photo'])) {
              echo '<div class="w-full my-10">
                    <img src="' . $development['photo'] . '" alt="image" class="w-full">
                  </div>';
            }
            ?>
            
            <div class="flex flex-col md:flex-row items-start gap-5 w-full">
              <h2 class="text-2xl w-full md:w-2/6">主な業務内容</h2>
              <div class="w-full md:w-4/6 grid grid-cols-1 md:grid-cols-2 gap-7 md:gap-10">
                <?php 
                if(is_array($development['list_content'])):
                foreach($development['list_content'] as $item): ?>
                  <div>
                    <h2 class="text-base md:text-xl"><?php echo $item['title']; ?></h2>
                    <p class="text-sm md:text-base mt-3 mb-7 text-[#B2B2B2]"><?php echo $item['description']; ?></p>
                    <div>
                      <div class="flex gap-7 justify-end items-center">
                        <div class="uppercase text-base md:text-lg">project</div>
                        <div
                          class="flex shrink-0 bg-white rounded-full h-[35px] w-[35px] p-2"
                        >
                          <img class="rotate-0" src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-blue.svg" alt="arrow" srcset="">
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php 
                endforeach; 
              endif;
              ?>
              </div>
            </div>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 right-0 w-full mix-blend-exclusion z-10">
          <h1 class="gradient-text text-end">development</h1>
        </div>
    <div class="absolute bottom-40 right-0 z-0">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/business/bg-development.svg" alt="bg development" >
    </div>
  </div>

    <!-- CONSULTING -->
    <div class="relative pb-24 md:pb-64">
    <div class="max-w-[1200px] mx-auto text-white relative z-20 px-5 md:px-0">
      <div class="w-full bg-[#B2B2B2] h-[1px]"></div>
      <div class="">
        <h4 class="my-5">アプリ/システム開発</h4>
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-5">
          <h1 class="text-3xl md:text-5xl uppercase font-bold tracking-widest flex-1">consulting</h1>
          <div class="flex-1">お客様のビジネスニーズを深く理解し、外部サービス導入・ノーコードツール開発・スクラッチ開発等、経験豊富なメンバーがご支援</div>
        </div>
        <div>
          <?php 
          $consluting = get_field('consulting');
          if (!empty($consluting)):
          ?>
            <?php
            if(!empty($consluting['photo'])) {
              echo '<div class="w-full my-10">
                    <img src="' . $consluting['photo'] . '" alt="image" class="w-full">
                  </div>';
            }
            ?>
            
            <div class="flex items-start gap-5 w-full">
              <h2 class="text-2xl w-full md:w-2/6">主な業務内容</h2>
              <div class="w-full md:w-4/6 grid grid-cols-1 md:grid-cols-2 gap-7 md:gap-10">
                <?php 
                if(is_array($consluting['list_content'])):
                foreach($consluting['list_content'] as $item): ?>
                  <div>
                    <h2 class="text-base md:text-xl"><?php echo $item['title']; ?></h2>
                    <p class="text-sm md:text-base mt-3 mb-7 text-[#B2B2B2]"><?php echo $item['description']; ?></p>
                    <div>
                      <div class="flex gap-7 justify-end items-center">
                        <div class="uppercase text-base md:text-lg">project</div>
                        <div
                          class="flex shrink-0 bg-white rounded-full h-[35px] w-[35px] p-2"
                        >
                          <img class="rotate-0" src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-blue.svg" alt="arrow" srcset="">
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php 
                endforeach; 
              endif;
              ?>
              </div>
            </div>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 right-0 w-full mix-blend-exclusion z-10">
          <h1 class="gradient-text text-end">consulting</h1>
    </div>
    <div class="absolute bottom-72 left-0 z-0">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/business/bg-consulting.svg" alt="bg consulting" >
    </div>
  </div>

    <!-- FINNACE -->
    <div class="relative pb-24 md:pb-64">
    <div class="max-w-[1200px] mx-auto text-white relative z-20 px-5 md:px-0">
      <div class="w-full bg-[#B2B2B2] h-[1px]"></div>
      <div class="">
        <h4 class="my-5">アプリ/システム開発</h4>
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-5">
          <h1 class="text-3xl md:text-5xl uppercase font-bold tracking-widest flex-1">finance</h1>
          <div class="flex-1">お客様のビジネスニーズを深く理解し、外部サービス導入・ノーコードツール開発・スクラッチ開発等、経験豊富なメンバーがご支援</div>
        </div>
        <div>
          <?php 
          $finance = get_field('finance');
          if (!empty($finance)):
          ?>
            <?php
            if(!empty($finance['photo'])) {
              echo '<div class="w-full my-10">
                    <img src="' . $finance['photo'] . '" alt="image" class="w-full">
                  </div>';
            }
            ?>
            
            <div class="flex flex-col md:flex-row items-start gap-5 w-full">
              <h2 class="text-2xl w-full md:w-2/6">主な業務内容</h2>
              <div class="w-full md:w-4/6 grid grid-cols-1 md:grid-cols-2 gap-7 md:gap-10">
                <?php 
                if(is_array($finance['list_content'])):
                foreach($finance['list_content'] as $item): ?>
                  <div>
                    <h2 class="text-base md:text-xl"><?php echo $item['title']; ?></h2>
                    <p class="mt-3 mb-7 text-[#B2B2B2] text-sm md:text-base"><?php echo $item['description']; ?></p>
                    <div>
                      <div class="flex gap-7 justify-end items-center">
                        <div class="uppercase text-base md:text-lg">project</div>
                        <div
                          class="flex shrink-0 bg-white rounded-full h-[35px] w-[35px] p-2"
                        >
                          <img class="rotate-0" src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-blue.svg" alt="arrow" srcset="">
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php 
                endforeach; 
              endif;
              ?>
              </div>
            </div>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 right-0 w-full mix-blend-exclusion z-10">
          <h1 class="gradient-text text-end">finance</h1>
        </div>
    <div class="absolute bottom-72 right-0 z-0">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/business/bg-finance.svg" alt="bg finance" >
    </div>
  </div>

</section>

<?php 
get_footer();
?>
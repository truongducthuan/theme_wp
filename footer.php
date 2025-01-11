<div class="relative z-10">
    <?php include(locate_template('template-parts/recruit-and-contact.php')); ?>
  </div>
<div
          class="flex flex-col py-10 md:py-24 pr-16 pl-7 w-full bg-white max-md:px-5 max-md:max-w-full"
        >
          <div
            class="flex flex-wrap gap-10 justify-between items-center w-full max-md:max-w-full"
          >
            <div
              class="flex items-start self-stretch w-fit md:min-w-[240px] md:w-[342px]"
            >
              <img
                loading="lazy"
                src="<?php get_template_directory_uri() ?>/wp-content/uploads/2025/01/logo-e1736171558410.png"
                class="object-contain self-stretch my-auto w-full"
              />
            </div>
            <div
              class="flex flex-wrap gap-7 items-center self-stretch my-auto text-sm font-bold text-black whitespace-nowrap min-w-[240px]"
            >
              <div class="self-stretch my-auto"><a href="#business">事業内容</a></div>
              <div class="self-stretch my-auto"><a href="<?php echo esc_url(home_url('/achievements')); ?>">実績</a></div>
              <div class="self-stretch my-auto"><a href="#project">企業案内</a></div>
              <div class="self-stretch my-auto"><a href="<?php echo esc_url(home_url('/what-we-do')); ?>">採用情報</a></div>
              <div class="self-stretch my-auto"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></div>
            </div>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between self-end mt-28 w-full max-w-[1202px] max-md:mt-10 max-md:max-w-full"
          >
            <div
              class="hidden md:flex flex-col md:flex-row gap-6 my-auto text-xs text-neutral-700 max-md:max-w-full order-2 md:order-1"
            >
              <div class="flex-auto">
                Copyright © 2024 エイジラボ株式会社 | AGELAB.inc. All Rights
                Reserved.
              </div>
              <div class="basis-auto">プライバシーポリシー</div>
            </div>

            <div
              class="flex md:hidden flex-col md:flex-row gap-2 my-auto text-xs text-neutral-700 max-md:max-w-full order-2 md:order-1"
            >
              <div class="flex-auto">
                Copyright © 2024 エイジラボ株式会社 | AGELAB.inc.
              </div>
              <div class="basis-auto">All Rights
              Reserved. プライバシーポリシー</div>
            </div>
            <div class="flex gap-4 order-1 md:order-2">
              <div class="grow text-sm font-black text-black">FOLLOW US</div>
              <div class="flex gap-4 items-center my-auto">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/fe070d1b23d58928649fd5bfe4b0e7af4b905ec411f63b1ff4da4651ec8324bf?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                  class="object-contain shrink-0 self-stretch my-auto w-3.5 aspect-square"
                />
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/5e2340d6e26bbcf833915bd278b41dc68570d29bf28c29f3262a7b3e517df43f?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                  class="object-contain shrink-0 self-stretch my-auto w-3.5 aspect-square"
                />
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/8074f838b4235a6291c6f649b922eb8ae816a56ab059e3ba8e84febdbb0e2da7?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                  class="object-contain shrink-0 self-stretch my-auto w-3.5 aspect-square"
                />
              </div>
            </div>
          </div>
        </div>

</main>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/swiper.js'; ?>"></script>

<?php wp_footer(); ?>
</html>       
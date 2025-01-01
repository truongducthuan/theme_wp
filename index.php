<?php 
get_header();

// get news
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1, // retrieve all posts
);

$posts = new WP_Query( $args );

$page_id = get_the_ID();
?>

<div class="flex flex-col">
  <div
    class="flex overflow-hidden flex-col w-full max-md:max-w-full"
  >
    <div class="flex relative flex-col w-full max-md:max-w-full">
      <div class="flex relative z-10 flex-col w-full max-md:max-w-full">
        <!-- Start Banner -->
        <?php // get_template_part('template-parts/banner-slider'); ?>
        <?php get_template_part('template-parts/banner-slide'); ?>
        <!-- End Banner -->

      <!-- Start slice --> 
      <div class="flex flex-col mt-36 w-full lg:h-[450px] 2xl:h-[550px]" id="slide_phone">
        <?php  include('template-parts/slide-autoplay.php'); ?>
      </div>
      <!-- End Slice -->

      <!-- Start our work-->
      <?php 
        $we_do = get_field('what_to_do');
        ?>
      <div class="flex justify-between pt-36" id="our_work">
        <div class="mt-[100px] w-1/2 h-[620px] overflow-hidden">
              <div class="swiper mySwiperPhone">
                <div class="swiper-wrapper">
                  <?php 
                  if(!empty($we_do)):
                    foreach($we_do as $item):
                      $img = $item['image'];
                      ?>
                      <div class="swiper-slide">
                        <div class="h-full clip-path__work"><img
                          loading="lazy"
                          src="<?php echo $img; ?>"
                          class="object-contain w-full h-full"
                        /></div>
                      </div>
                      <?php 
                    endforeach;
                  endif;
                  ?>
                </div>
              </div>
        </div>
    
        <div class="relative w-1/2">
          <div class="absolute z-10 top-0 right-0 left-0 bg-gradient-to-t from-black to-inherit">
            <div class="gradient-text">what we do</div>
          </div>

          <div class="flex flex-col justify-start gap-9 mt-[70px] relative">
            <div
              class="flex relative z-10 flex-col self-start mr-36 max-w-full text-white whitespace-nowrap w-[615px] max-md:mr-2.5"
            >
              <div
                class="flex gap-3 justify-between items-center self-start text-base"
              >
                <div
                  class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                ></div>
                <div class="self-stretch my-auto">私たちについて</div>
              </div>
              <div class="mt-9 text-[45px] max-md:max-w-full max-md:text-4xl text-wrap leading-[4.5rem] opacity-0 shining-text__effect">
                圧倒的な技術力で
                <br />
                日本のDX化推進の一翼を担う
                <br />
                エンジニア集団
              </div>
            </div>

            <div
              class="flex relative z-10 flex-col self-start max-w-[570px] max-md:max-w-full"
            >
              <div class="self-start text-lg text-zinc-400 max-md:max-w-full text-fade--out opacity-0">
                私たちは、金融と技術のプロフェッショナルが共に創業したITスタートアップです。
                <br />
                私たちAgeLabは、テクノロジーで新しい時代を切り開き、新たな価値の創出を追求します。
              </div>
              <a
                href="<?php echo esc_url(home_url('/what-we-do')); ?>"
                class="flex gap-5 btn-arrow hover:cursor-pointer justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-md:pl-5 max-md:mt-10"
              >
                <div class="my-auto">ABOUT US</div>
                <div
                  class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
                >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
      <!-- End our work -->
  
      <div
        class="flex relative flex-col mt-52 w-full"
      >
        <!-- Start introduction -->
        <span
            class="scroll-to"
            data-label="Scroll to: #business"
            data-bullet="false"
            data-link="#business"
            data-title="business"
            ><a name="business"></a
          ></span>
        <div class="self-end w-full relative">
          <div class="absolute -top-[70px] right-0 left-0 w-full">
            <div class="gradient-text">introduction</div>
          </div>
          <div class="flex gap-5 max-md:flex-col max-w-[1200px] mx-auto z-10">

            <div class="flex flex-col w-1/2 max-md:w-full z-10">
              <div class="flex flex-col max-md:w-full">
                <div class="flex flex-col mt-11 max-md:mt-10 max-md:max-w-full">
                  <div class="flex gap-3 justify-between items-center self-start text-base">
                  <div
                    class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div class="self-stretch my-auto text-white">事業内容</div>
                  </div>
                  <div
                    class="self-start mt-9 text-9xl font-black text-white uppercase leading-[110px] max-md:max-w-full max-md:text-4xl max-md:leading-10"
                  >
                    OUR
                    <br />
                    BUSINESS
                  </div>
                </div>
              </div>
              <?php 
              $businesses = get_field('our_business');
              // echo '<pre>';
              // echo print_r($businesses);
              // echo '</pre>';
              ?>
              <div
                class="flex flex-col items-start w-full text-4xl text-white whitespace-nowrap mt-28 max-md:max-w-full"
              >
                <?php 
                if($businesses):
                  foreach($businesses as $business):
                ?>
                <div class="cursor-pointer business_title w-full pt-6 overflow-hidden relative news-link-bg-slice" data-set="<?php echo $business['photo']['url']; ?>">
                <div
                  class="flex justify-between w-full"
                >
                  <div class=""><?php echo $business['title']; ?></div>
                  <div
                  class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2 relative z-10"
                  >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                  </div>
             
                </div>
                <div
                  class="shrink-0 mt-6 h-px border border-solid border-zinc-400 w-full"
                ></div>
                </div>
                <?php 
                endforeach;
                endif;
                ?>
        
              </div>
            </div>

            <div class="flex flex-col mt-[7.5rem] ml-5 w-1/2 max-md:ml-0 max-md:w-full" id="business_content">
              <img src="<?php echo $businesses[0]['photo']['url']; ?>" class="z-10" >
            </div>
          </div>
        </div>
        <!-- End introduction -->

        <!-- Start Run Text -->
        <div class="pt-48 relative">
          <div class="absolute left-0 top-[15%]">
            <img
              loading="lazy"
              src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
              class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
            />
          </div>
          <div class="absolute right-0 left-0 -top-[100%]">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/svg/Union.svg" alt="Union" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/Union.svg ?>" >
          </div>
          <div
            class="decorative-text decorative-text--1"
            style="fill: #ffd700;"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" x="0" y="150" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl" font-family="Arial" font-size="14" fill="black">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
                
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl" font-family="Arial" font-size="14" fill="blue">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
          </div>
          <div
            class="decorative-text decorative-text--2"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl">system that MAKES PEOPLE</text>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl">system that MAKES PEOPLE</text>
              </svg>
            </div>
          </div>
        </div>
        <!-- End Run Text -->

        <!-- Start Achievements -->
        <span
            class="scroll-to"
            data-label="Scroll to: #achievement"
            data-bullet="false"
            data-link="#achievement"
            data-title="achievement"
            ><a name="achievement"></a
          ></span>
         <?php 
          $achievements = get_field('our_achievement');
         ?>
        <div class="w-full pt-36 z-10">
          <div class="flex gap-5 max-md:flex-col">
            <div class="mt-[100px] w-1/2 h-[620px] overflow-hidden">
              <div class="swiper mySwiperPhone">
                <div class="swiper-wrapper">
                  <?php 
                  if(!empty($achievements)):
                    foreach($achievements as $item):
                      $img = $item['image'];
                      ?>
                      <div class="swiper-slide">
                        <div class="h-full clip-path__work"><img
                          loading="lazy"
                          src="<?php echo $img; ?>"
                          class="object-contain w-full h-full"
                        /></div>
                      </div>
                      <?php 
                    endforeach;
                  endif;
                  ?>
                </div>
              </div>
            </div>
            <div class="flex flex-col ml-5 w-1/2 max-md:ml-0 max-md:w-full">
              <div class="flex flex-col justify-start mt-11 gap-9 max-md:mt-10 max-md:max-w-full">
                <div
                  class="flex gap-3  text-base text-white whitespace-nowrap"
                >
                  <div
                    class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div>実績</div>
                </div>

                <div
                  class="self-start text-9xl font-black text-white uppercase leading-[110px] max-md:max-w-full max-md:text-4xl max-md:leading-10"
                >
                  <div class="flex items-center gap-2">OUR<span class="text-3xl text-center">Project</span></div>
                  <div>Achieve</div>
                  <div>ments</div>
                </div>
                <div
                  class="mt-24 text-lg text-zinc-400 max-md:mt-10 max-md:max-w-full mr-0 md:mr-[380px]"
                >
                  お客様に満足していただける高品質なシステム作りをしています。
                  <br />
                  デジタルの領域の実績は１,０００以上で、幅広くお客様のニーズにお応えします。
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Achievements -->

        <!-- Start Our Project -->
        <span
            class="scroll-to"
            data-label="Scroll to: #project"
            data-bullet="false"
            data-link="#project"
            data-title="project"
            ><a name="project"></a
          ></span>
        <div class="relative w-full mt-36">
          <div class="absolute right-0 -top-[100%]">
            <img class="w-full mix-blend-luminosity" src="<?php echo get_template_directory_uri(); ?>/assets/svg/bg2.svg" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/bg2.svg" class="w-full" >
          </div>
            <div class="absolute -top-[100px] right-0 left-0">
              <div class="gradient-text">our project</div>
            </div>

            <div class="flex flex-col md:flex-row max-w-[1200px] mx-auto">
              <div class="w-1/2 mt-[100px]">
                <div class="flex items-center justify-start gap-4">
                  <div class="text-xl text-white max-md:max-w-full">株式会社ABC</div>
                  <div class="text-white bg-[#D70C18] py-0.5 px-4">カテゴリー名</div>
                </div>
                <div
                  class="text-5xl text-white max-md:max-w-full max-md:text-4xl my-4"
                >
                  女性専用マッチングアプリ
                  <span class="lowercase mt-4">to-suto</span>
                </div>
                <div
                  class="flex gap-4 items-center mt-4 text-lg whitespace-nowrap text-zinc-400"
                >
                  <div class="self-stretch my-auto w-[71px]">＃タグ1</div>
                  <div class="self-stretch my-auto w-[71px]">＃タグ2</div>
                  <div class="self-stretch my-auto w-[71px]">＃タグ3</div>
                </div>

                <?php get_template_part('template-parts/view_more'); ?>
              </div>

              <?php 
            $phones = get_field('our_project');
        
            ?>
            <div id="project-slider" class="flex shrink-0 self-stretch -mt-[100px] w-1/2 h-[650px]">
              <div class="swiper mySwiperPhone">
                <div class="swiper-wrapper">
                  <?php 
                  if(!empty($phones)):
                    foreach($phones as $phone):
                      $img = $phone['photo'];
                      ?>
                      <div class="swiper-slide">
                        <div class="h-full shadow-image"><img
                          loading="lazy"
                          src="<?php echo $img; ?>"
                          class="object-contain w-full h-full"
                        /></div>
                      </div>
                      <?php 
                    endforeach;
                  endif;
                  ?>
                </div>
                
                  
                <style>
                 .shadow-image::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 14%;
                    transform: translateX(-50%);
                    z-index: -1;
                    background-image: url('<?php echo get_template_directory_uri() ?>/assets/svg/mock_shadow 1.svg');
                    /* background: #222222; */
                    width: 100%;
                    height: 49%;
                    background: linear-gradient(45deg, url('http://localhost:10034/wp-content/themes/age_lab/assets/svg/mock_shadow%201.svg'), transparent);
                    opacity: 0.1;
                    transform: rotate(100deg);
                 }
                </style>
              </div>
            </div>
          </div>
        </div>
        <!-- End Our Project -->
          
        <!-- Start News -->
        <span
            class="scroll-to"
            data-label="Scroll to: #news"
            data-bullet="false"
            data-link="#news"
            data-title="news"
            ><a name="news"></a
          ></span>
        <?php
         $categories = get_categories();
        ?>
        <div
        class="flex flex-col py-36 items-start w-full max-w-[1200px] mx-auto"
        >
          
          <div class="flex gap-3 mt-1.5 text-base text-white whitespace-nowrap">
            <div
              class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
            ></div>
            <div>お知らせ</div>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between mt-10 w-full max-w-[1202px] max-md:max-w-full"
          >
            <div
              class="text-9xl font-black leading-none text-white uppercase max-md:text-4xl"
            >
              NEWS
            </div>
            <a
              href="<?php echo esc_url('/news'); ?>"
              class="flex gap-5 justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-md:pl-5 hover:cursor-pointer max-md:mt-10 btn-arrow"
              >
                <div class="my-auto uppercase">view more</div>
                <div
                class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
                >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                </div>
            </a>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between mt-12 w-full text-white uppercase max-w-[1203px] max-md:mt-10 max-md:max-w-full"
          >
            <div
              class="flex flex-col self-start text-base leading-7 tracking-[1.95px]"
              id="list_category"
            >
              <script>
                var categories = <?php echo json_encode($categories); ?>;

                categories = Object.values(categories);
                categories.unshift({name: 'ALL'}); // Fixed the error by removing [0]
                console.log({categories});
                let active = 'ALL';
           
                function renderCategory(active) {
                  document.getElementById('list_category').innerHTML = ""; // Clear the container before rendering
                  categories.map(category => {
                    const content = `
                    <div
                      class="flex flex-col py-2 whitespace-nowrap rounded-none w-fit cursor-pointer hover:opacity-80 active:translate-x-2 hover:translate-x-2 transition-all"
                      onclick="getCategory('${category.name}');getActive('${category.name}');"
                      id="news_category"
                    >
                      <div class="max-md:mr-1 uppercase cursor-pointer">${category.name}</div>
                      ${active == category.name ? '<div class="shrink-0 mt-2 h-px border border-white border-solid"></div>' : ''}
                    </div>
                    `;
                    document.getElementById('list_category').innerHTML += content;
                  });
                }
                renderCategory(active);

                function getActive(categoryName) {
                  active = categoryName;
                  renderCategory(active);
                }
              </script>
            </div>
    
            <div
              class="flex flex-col font-extrabold whitespace-nowrap max-md:max-w-full"
              id="news_list"
            ></div>
          </div>
        </div>
        <!-- End News -->

      </div>
    </div>
  </div>
</div>

<?php get_footer();
$newsList = array();
if(is_array($posts->posts)){
  foreach ($posts->posts as $post) {
    $post->category = get_the_category($post->ID);
    array_push($newsList, $post);
  }
}
?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/home.js'; ?>"></script>

<script>
  var newsLists = <?php echo json_encode($newsList); ?>;
  console.log('list news index' ,newsLists);
  //var bannerSlide = <?php //echo json_encode($banner_slides); ?>;

</script>
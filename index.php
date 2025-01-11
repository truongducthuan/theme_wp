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
      <div class="flex flex-col mt-5 md:mt-36 w-full h-[300px] lg:h-[450px] 2xl:h-[550px]" id="slide_phone">
        <?php  include('template-parts/slide-autoplay.php'); ?>
      </div>
      <!-- End Slice -->

      <!-- Start our work-->
      <?php 
        $we_do = get_field('what_to_do');
        ?>
      <div class="flex flex-col md:flex-row justify-between pt-5 md:pt-36" id="our_work">
        <div class="mt-5 md:mt-[100px] w-full md:w-1/2 h-[300px] md:h-[620px] overflow-visible md:overflow-hidden relative">
          <div class="block md:hidden absolute z-10 wd__top-20 right-0 left-0 bg-gradient-to-t from-black to-inherit">
            <div class="gradient-text wd__line-height">what we do</div>
          </div>
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
		  <style>
			  .wd__line-height {
				  line-height: 180px;
			  }
			  .wd__top-20 {
				  top: -20px;
			  }

        @media (max-width: 768px) {
          #our_work .gradient-text {
            font-size: 7rem;
          }
          .wd__line-height {
            line-height: 120px;
          }
          .wd__top-20 {
            top: -60px;
          }
        }
		  </style>
        <div class="relative w-full md:w-1/2 px-5 md:px-0">
          <div class="block md:hidden absolute right-0 left-0 -top-[100%]">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/svg/bg-mobile-home.svg" alt="Union" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/bg-mobile-home.svg" >
          </div>

          <div class="hidden md:block absolute z-10 wd__top-20 right-0 left-0 bg-gradient-to-t from-black to-inherit">
            <div class="gradient-text wd__line-height">what we do</div>
          </div>

          <div class="flex flex-col justify-start gap-9 mt-[90px] md:mt-[70px] relative">
            <div
              class="flex relative z-10 flex-col self-start mr-36 max-w-full text-white whitespace-nowrap w-[615px] max-md:mr-2.5"
            >
              <div
                class="flex gap-3 justify-between items-center self-start text-base"
              >
                <div
                  class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                ></div>
                <div class="text-sm md:text-base self-stretch my-auto">私たちについて</div>
              </div>
              <div class="mt-5 md:mt-9 max-md:max-w-full text-2xl md:text-4xl text-wrap leading-9 md:leading-[4.5rem] opacity-0 shining-text__effect">
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
              <div class="self-start text-base md:text-lg text-zinc-400 max-md:max-w-full text-fade--out opacity-0">
                私たちは、金融と技術のプロフェッショナルが共に創業したITスタートアップです。
                <br />
                私たちAgeLabは、テクノロジーで新しい時代を切り開き、新たな価値の創出を追求します。
              </div>
              <a
                href="<?php echo esc_url(home_url('/what-we-do')); ?>"
                class="hidden md:flex gap-5 btn-arrow hover:cursor-pointer justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-md:pl-5 max-md:mt-10"
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
        class="flex relative flex-col mt-32 md:mt-52 w-full"
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
		  <style>
			  .inr__top-100 {
				  top: -100px;
			  }
		  </style>
        <div class="self-end w-full relative" id="business">
          <div class="absolute inr__top-100 right-0 left-0 w-full">
            <div class="gradient-text">introduction</div>
          </div>
          <div class="flex gap-5 max-md:flex-col max-w-[1200px] px-5 md:px-0 mx-auto z-10">

            <div class="flex flex-col w-1/2 max-md:w-full z-10">
              <div class="flex flex-col max-md:w-full">
                <div class="flex flex-col mt-0 md:mt-11 max-md:max-w-full">
                  <div class="flex gap-3 justify-between items-center self-start text-base">
                  <div
                    class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div class="self-stretch my-auto text-white">事業内容</div>
                  </div>
                  <div
                    class="self-start mt-5 md:mt-9 text-6xl md:text-9xl font-black text-white uppercase leading-[60px] md:leading-[110px] max-w-full"
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
                class="flex flex-col items-start w-full text-xl md:text-4xl text-white whitespace-nowrap mt-16 md:mt-28 max-md:max-w-full"
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
                  class="shrink-0 mt-4 md:mt-6 h-px border border-solid border-zinc-400 w-full"
                ></div>
                </div>
                <?php 
                endforeach;
                endif;
                ?>
        
              </div>
            </div>

            <div class="flex flex-col mt-14 md:mt-[7.5rem] ml-5 w-1/2 int-h-500 max-md:ml-0 max-md:w-full" id="business_content">
              <img src="<?php echo $businesses[0]['photo']['url']; ?>" class="z-10" >
            </div>
          </div>
        </div>
		  <style>
			  .int-h-500 {
				  height: 500px;
			  }

        @media (max-width: 768px) {
          .int-h-500 {
            height: 400px;
          }

          #business .gradient-text {
            font-size: 7rem;
          }
        }
		  </style>
        <!-- End introduction -->

        <!-- Start Run Text -->
        <div class="pt-0 md:pt-48 relative">
          <div class="absolute left-0 top-[15%]">
            <img
              loading="lazy"
              src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
              class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
            />
          </div>
          <div class="hidden md:block absolute right-0 left-0 -top-[100%]">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/svg/Union.svg" alt="Union" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/Union.svg ?>" >
          </div>
          <div
            class="hidden md:flex decorative-text decorative-text--1"
            style="fill: #ffd700;"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" x="0" y="150" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]" font-family="Arial" font-size="14" fill="black">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]" font-family="Arial" font-size="14" fill="blue">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
          </div>
          <div
            class="flex md:hidden decorative-text decorative-text--1"
            style="fill: #ffd700;"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1850" height="100%">
                  <defs>
                      <text id="text-creator-first" x="0" y="150" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]" font-family="Arial" font-size="14" fill="black">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1850" height="100%">
                  <defs>
                      <text id="text-creator-first" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]" font-family="Arial" font-size="14" fill="blue">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
          </div>

          <div
            class="hidden md:flex decorative-text decorative-text--2"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]">system that MAKES PEOPLE</text>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]">system that MAKES PEOPLE</text>
              </svg>
            </div>
          </div>
          <div
            class="flex md:hidden decorative-text decorative-text--2"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]">system that MAKES PEOPLE</text>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] md:text-[183px]">system that MAKES PEOPLE</text>
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
          <div class="flex flex-col md:flex-row gap-5">
            <div class="mt-[100px] w-full md:w-1/2 h-[300px] md:h-[620px] overflow-hidden">
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
            <div class="flex flex-col px-5 md:px-0 ml-0 md:ml-5 w-full md:w-1/2">
              <div class="flex flex-col justify-start mt-11 gap-5 md:gap-9">
                <div
                  class="flex gap-3  text-base text-white whitespace-nowrap"
                >
                  <div
                    class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div>実績</div>
                </div>

                <div
                  class="self-start text-6xl md:text-9xl font-black text-white uppercase leading-[60px] md:leading-[110px]"
                >
                  <div class="flex items-center gap-2">OUR<span class="text-xl md:text-3xl text-center">Project</span></div>
                  <div>Achieve</div>
                  <div>ments</div>
                </div>
                <div
                  class="mt-5 md:mt-24 text-sm md:text-lg text-zinc-400 mr-0"
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
        <div class="relative w-full mt-5 md:mt-36" id="project">
          <div class="absolute right-0 -top-[100%]">
            <img class="hidden md:block w-full mix-blend-luminosity" src="<?php echo get_template_directory_uri(); ?>/assets/svg/bg2.svg" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/bg2.svg" class="w-full" >
          </div>
            <div class="absolute top-[32px] md:-top-[100px] right-0 left-0">
              <div class="gradient-text">our project</div>
            </div>

            <div class="flex flex-col md:flex-row max-w-[1200px] mx-auto px-5 md:px-0">
              <div class="w-full md:w-1/2 mt-[100px]">
                <div class="flex items-center justify-start gap-4">
                  <div class="text-base md:text-xl text-white max-md:max-w-full">株式会社ABC</div>
                  <div class="text-white bg-[#D70C18] text-sm md:text-base py-0.5 px-4">カテゴリー名</div>
                </div>
                <div
                  class="text-3xl md:text-5xl text-white my-4"
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

                <div
                  class="flex gap-5 justify-between self-end py-1.5 md:py-3.5 pr-3.5 pl-10 mt-5 md:mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-52 md:w-[295px] hover:cursor-pointer btn-arrow"
                >
                    <div class="text-sm md:text-base my-auto uppercase">view more</div>
                    <div
                    class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
                    >
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                    </div>
                </div>
              </div>

              <?php 
            $phones = get_field('our_project');
        
            ?>
            <div id="project-slider" class="flex shrink-0 self-stretch mt-5 md:-mt-[100px] w-full md:w-1/2 h-[300px] md:h-[650px]">
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

                 @media (max-width: 768px) {
                   #project .gradient-text {
                    font-size: 5rem;
                   }
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
        class="flex flex-col py-20 md:py-36 items-start w-full max-w-[1200px] mx-auto px-5 md:px-0"
        >
          
          <div class="flex gap-3 mt-1.5 text-base text-white whitespace-nowrap">
            <div
              class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
            ></div>
            <div>お知らせ</div>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between mt-5 md:mt-10 w-full max-w-[1202px] max-md:max-w-full"
          >
            <div
              class="text-9xl font-black leading-none text-white uppercase max-md:text-4xl"
            >
              NEWS
            </div>
            <a
              href="<?php echo esc_url('/news'); ?>"
              class="hidden md:flex gap-5 justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-md:pl-5 hover:cursor-pointer max-md:mt-10 btn-arrow"
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
                      class="flex flex-col py-1 md:py-2 whitespace-nowrap rounded-none w-fit cursor-pointer hover:opacity-80 active:translate-x-2 hover:translate-x-2 transition-all"
                      onclick="getCategory('${category.name}');getActive('${category.name}');"
                      id="news_category"
                    >
                      <div class="max-md:mr-1 text-sm md:text-base uppercase cursor-pointer">${category.name}</div>
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
              class="flex flex-col font-extrabold whitespace-nowrap w-full md:news__w-3-4"
              id="news_list"
            ></div>

            <div class="w-full flex justify-end">
              <a
                href="<?php echo esc_url('/news'); ?>"
                class="flex md:hidden gap-5 justify-between self-end py-1.5 md:py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-52 md:w-[295px] max-md:pl-5 hover:cursor-pointer max-md:mt-10 btn-arrow"
                >
                  <div class="text-sm md:text-base my-auto uppercase">view more</div>
                  <div
                  class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
                  >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                  </div>
              </a>
            </div>
          </div>
        </div>
		  <style>
			  .news__w-3-4 {
				  width: 65%;
			  }
		  </style>
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
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
    class="flex overflow-hidden flex-col w-full max-lg:max-w-full"
  >
    <div class="flex relative flex-col w-full max-lg:max-w-full">
      <div class="flex relative z-10 flex-col w-full max-lg:max-w-full">
        <!-- Start Banner -->
        <?php // get_template_part('template-parts/banner-slider'); ?>
        <?php get_template_part('template-parts/banner-slide'); ?>
        <!-- End Banner -->

      <!-- Start slice --> 
      <div class="flex flex-col mt-5 lg:mt-36 w-full h-[300px] lg:h-[450px] 2xl:h-[550px] relative z-10" id="slide_phone">
        <?php  include('template-parts/slide-autoplay.php'); ?>
      </div>
      <!-- End Slice -->

      <!-- Start our work-->
      <?php 
        $we_do = get_field('what_to_do');
        ?>
      <div class="flex flex-col lg:flex-row justify-between pt-5 lg:pt-36" id="our_work">
        <div class="mt-[4rem] lg:mt-[100px] w-full lg:w-1/2 h-[300px] md:h-[520px] lg:h-[620px] xl:h-[920px] overflow-visible lg:overflow-hidden relative">
          <div class="block lg:hidden absolute z-10 wd__top-20 right-0 left-0 bg-gradient-to-t from-black to-inherit">
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
        <div class="relative w-full lg:w-1/2 px-5 lg:px-0">
          <div class="block lg:hidden absolute right-0 left-0 -top-[30%]">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/svg/bg-mobile-home.svg" alt="Union" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/bg-mobile-home.svg" >
          </div>

          <div class="hidden lg:block absolute z-10 wd__top-20 right-0 left-0 bg-gradient-to-t from-black to-inherit">
            <div class="gradient-text wd__line-height">what</div>
          </div>
          <div class="hidden lg:block absolute z-10 top-[9.5rem] right-0 -left-[5.25rem] bg-gradient-to-t from-black to-inherit">
            <div class="gradient-text wd__line-height">we do</div>
          </div>

          <div class="flex flex-col justify-start gap-9 mt-[10rem] md:mt-[20rem] lg:mt-[70px] relative">
            <div
              class="flex relative z-10 flex-col self-start mr-36 max-w-full text-white whitespace-nowrap w-[615px] max-lg:mr-2.5"
            >
              <div
                class="flex gap-3 justify-between items-center self-start text-base"
              >
                <div
                  class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                ></div>
                <div class="text-sm lg:text-base self-stretch my-auto">私たちについて</div>
              </div>
              <div class="mt-5 lg:mt-9 max-lg:max-w-full text-3xl lg:text-[2.8rem] text-wrap leading-9 lg:leading-[4rem] opacity-0 shining-text__effect">
                圧倒的な技術力で
                <br />
                日本のDX化推進の一翼を担う
                <br />
                エンジニア集団
              </div>
            </div>

            <div
              class="flex relative z-10 flex-col self-start max-w-[570px] max-lg:max-w-full"
            >
              <div class="self-start text-base lg:text-lg text-zinc-400 max-lg:max-w-full lg:leading-[36px] text-fade--out opacity-0">
                私たちは、金融と技術のプロフェッショナルが共に創業したITスタートアップです。
                <br />
                私たちAgeLabは、テクノロジーで新しい時代を切り開き、新たな価値の創出を追求します。
              </div>
              <a
                href="<?php echo esc_url(home_url('/what-we-do')); ?>"
                class="hidden lg:flex gap-5 btn-arrow hover:cursor-pointer justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-lg:pl-5 max-lg:mt-10"
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
        class="flex relative flex-col mt-32 lg:mt-52 w-full"
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
          <div class="absolute inr__top-100 right-0 left-0 w-[102%]">
            <div class="gradient-text">introduction</div>
          </div>
          <div class="flex gap-5 max-lg:flex-col max-w-[1200px] px-5 lg:px-0 mx-auto z-10">

            <div class="flex flex-col w-1/2 max-lg:w-full z-10">
              <div class="flex flex-col max-lg:w-full">
                <div class="flex flex-col mt-0 lg:mt-11 max-lg:max-w-full">
                  <div class="flex gap-3 justify-between items-center self-start text-base">
                  <div
                    class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div class="self-stretch my-auto text-white">事業内容</div>
                  </div>
                  <div
                    class="self-start mt-5 lg:mt-9 text-6xl lg:text-[7rem] font-black text-white uppercase leading-[60px] lg:leading-[110px] max-w-full"
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
                class="flex flex-col items-start w-full text-xl lg:text-[2rem] text-white whitespace-nowrap mt-16 lg:mt-28 max-lg:max-w-full"
              >


<a href="<?php echo home_url('/our-business/#development'); ?>" 
   style="display: block; text-decoration: none; color: inherit; width: 100%; height: 100%; position: relative;">
    <div class="cursor-pointer business_title w-full pt-6 overflow-hidden relative news-link-bg-slice" 
         data-set="<?php echo $businesses[0]['photo']['url']; ?>">
        <div class="flex justify-between w-full">
            <div>
                アプリ/システム開発
            </div>
            <div class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2 relative z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow">
            </div>
        </div>
        <div class="shrink-0 mt-4 lg:mt-6 h-px border border-solid border-zinc-400 w-full"></div>
    </div>
</a>

<a href="<?php echo home_url('/our-business/#consulting'); ?>" 
   style="display: block; text-decoration: none; color: inherit; width: 100%; height: 100%; position: relative;">
    <div class="cursor-pointer business_title w-full pt-6 overflow-hidden relative news-link-bg-slice" 
         data-set="<?php echo $businesses[1]['photo']['url']; ?>">
        <div class="flex justify-between w-full">
            <div>
                AI/DXコンサルティング
            </div>
            <div class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2 relative z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow">
            </div>
        </div>
        <div class="shrink-0 mt-4 lg:mt-6 h-px border border-solid border-zinc-400 w-full"></div>
    </div>
</a>
				  
				  <a href="<?php echo home_url('/our-business/#finance'); ?>" 
   style="display: block; text-decoration: none; color: inherit; width: 100%; height: 100%; position: relative;">
    <div class="cursor-pointer business_title w-full pt-6 overflow-hidden relative news-link-bg-slice" 
         data-set="<?php echo $businesses[2]['photo']['url']; ?>">
        <div class="flex justify-between w-full">
            <div>
                M&A/財務支援
            </div>
            <div class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2 relative z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow">
            </div>
        </div>
        <div class="shrink-0 mt-4 lg:mt-6 h-px border border-solid border-zinc-400 w-full"></div>
    </div>
</a>
				  
              </div>
            </div>

            <div class="flex flex-col mt-14 lg:mt-[7.5rem] ml-5 w-1/2 int-h-500 max-lg:ml-0 max-lg:w-full" id="business_content">
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
        <div class="pt-0 md:pt-52 lg:pt-48 relative">
          <div class="absolute left-0 -top-[20%]">
            <img
              loading="lazy"
              src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
              class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-lg:mt-10 max-lg:max-w-full"
            />
          </div>
          <div class="hidden lg:block absolute right-0 left-0 -top-[100%]">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/svg/Union.svg" alt="Union" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/Union.svg ?>" >
          </div>
          <div
            class="hidden lg:flex decorative-text mix-blen-difference decorative-text--1"
            style="fill: #ffd700;"
          >
            <div class="mix-blen-difference">
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" x="0" y="150" class="mt-60 w-full font-bold text-center mix-blen-difference uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]" font-family="Arial" font-size="14" fill="#0F0F0F">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]" font-family="Arial" font-size="14" fill="blue">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
          </div>
          <div
            class="flex lg:hidden decorative-text decorative-text--1"
            style="fill: #ffd700;"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1850" height="100%">
                  <defs>
                      <text id="text-creator-first" x="0" y="150" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]" font-family="Arial" font-size="14" fill="#0F0F0F">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1850" height="100%">
                  <defs>
                      <text id="text-creator-first" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]" font-family="Arial" font-size="14" fill="blue">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
          </div>

          <div
            class="hidden lg:flex decorative-text decorative-text--2"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #393939;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]">system that MAKES PEOPLE</text>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #393939;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]">system that MAKES PEOPLE</text>
              </svg>
            </div>
          </div>
          <div
            class="flex lg:hidden decorative-text decorative-text--2"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1700" height="100%">
                <text x="0" y="150" style="fill: #393939;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]">system that MAKES PEOPLE</text>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="1700" height="100%">
                <text x="0" y="150" style="fill: #393939;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[120px] lg:text-[183px]">system that MAKES PEOPLE</text>
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
        <div class="w-full pt-0 lg:pt-14 z-10">
          <div class="flex flex-col lg:flex-row gap-5">
            <div class="mt-[100px] w-full lg:w-1/2 h-[500px] md:h-[800px] lg:h-[700px] xl:h-[900px] overflow-hidden">
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
            <div class="flex flex-col px-5 lg:px-0 ml-0 lg:ml-5 w-full lg:w-1/2">
              <div class="flex flex-col justify-start mt-11 gap-5 lg:gap-9">
                <div
                  class="flex gap-3  text-base text-white whitespace-nowrap"
                >
                  <div
                    class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div>実績</div>
                </div>

                <div
                  class="self-start text-6xl lg:text-[7.25rem] font-black text-white uppercase leading-[60px] lg:leading-[110px]"
                >
                  <div class="flex items-center gap-2">OUR<span class="text-xl lg:text-3xl text-center">Project</span></div>
                  <div>Achieve</div>
                  <div>ments</div>
                </div>
                <div
                  class="mt-5 lg:mt-20 text-sm lg:text-lg text-zinc-400 mr-0"
                >
                  お客様に満足していただける高品質なシステム作りをしています。
                  <br />
                  デジタルの領域の実績は１,０００以上で、幅広くお客様のニーズにお応えします。
                </div>

              </div>
              <div
                class="self-star flex gap-5 justify-between py-1.5 lg:py-3.5 pr-3.5 pl-5 lg:pl-10 mt-5 lg:mt-14 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-52 lg:w-[295px] hover:cursor-pointer btn-arrow"
              >
                <div class="text-sm lg:text-base my-auto uppercase">view more</div>
                <div
                  class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
                >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Achievements -->
          
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
        class="flex flex-col py-20 lg:py-36 items-start w-full max-w-[1200px] mx-auto px-5 lg:px-0 relative z-10"
        >
          
          <div class="flex gap-3 mt-1.5 text-base text-white whitespace-nowrap">
            <div
              class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
            ></div>
            <div>お知らせ</div>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between mt-5 lg:mt-10 w-full max-w-[1202px] max-lg:max-w-full"
          >
            <div
              class="text-6xl lg:text-9xl font-black leading-none text-white uppercase lg:text-[7.25rem]"
            >
              NEWS
            </div>
            <a
              href="<?php echo esc_url('/news'); ?>"
              class="hidden lg:flex gap-5 justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-lg:pl-5 hover:cursor-pointer max-lg:mt-10 btn-arrow"
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
            class="flex flex-col lg:flex-row gap-5 justify-between mt-12 w-full text-white uppercase max-w-[1203px] max-lg:mt-10 max-lg:max-w-full"
          >
            <div
              class="flex flex-col self-start min-w-[400px] text-base leading-7 tracking-[1.95px]"
              id="list_category"
            >
		<script>
  var categories = <?php echo json_encode($categories); ?>;

  // Lọc danh mục để chỉ giữ lại MEDIA, PRESS RELEASE và thêm ALL
  categories = Object.values(categories).filter(category => 
    ['MEDIA', 'PRESS RELEASE'].includes(category.name)
  );

  // Thêm "ALL" vào đầu danh sách
  categories.unshift({ name: 'ALL' });

  console.log({ categories });

  let active = 'ALL';

  // Hàm hiển thị danh mục
  function renderCategory(active) {
    const listCategory = document.getElementById('list_category');
    listCategory.innerHTML = ""; // Xóa nội dung cũ trước khi render mới

    categories.forEach(category => {
      // Tạo nội dung HTML cho từng danh mục
      const content = `
        <div
          class="flex flex-col py-1 lg:py-2 whitespace-nowrap rounded-none w-fit cursor-pointer hover:opacity-80 active:translate-x-2 hover:translate-x-2 transition-all"
          onclick="getCategory('${category.name}');getActive('${category.name}');"
          id="news_category"
        >
          <div class="max-lg:mr-1 text-sm lg:text-base uppercase cursor-pointer">${category.name}</div>
          ${active === category.name ? '<div class="shrink-0 mt-2 h-px border border-white border-solid"></div>' : ''}
        </div>
      `;
      listCategory.innerHTML += content;
    });
  }

  // Render danh mục lần đầu
  renderCategory(active);

  // Hàm thay đổi danh mục hoạt động
  function getActive(categoryName) {
    active = categoryName;
    renderCategory(active);
  }
</script>


            </div>
            <div
              class="flex flex-col font-extrabold whitespace-nowrap w-full lg:news__w-3-4"
              id="news_list"
            ></div>

            <div class="w-full flex lg:hidden justify-end">
              <a
                href="<?php echo esc_url('/news'); ?>"
                class="flex lg:hidden gap-5 justify-between self-end py-1.5 lg:py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-52 lg:w-[295px] max-lg:pl-5 hover:cursor-pointer max-lg:mt-10 btn-arrow"
                >
                  <div class="text-sm lg:text-base my-auto uppercase">view more</div>
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
  // Dữ liệu từ PHP
  const newsLists = <?php echo json_encode($newsList); ?>;

  // Hàm hiển thị bài viết theo tiêu đề
  function renderSpecificPost(title) {
    const container = document.getElementById('news-container'); // Container để hiển thị
    container.innerHTML = ''; // Xóa nội dung cũ

    // Lọc bài viết có tiêu đề khớp
    const post = newsLists.find(post => post.post_title === title);

    if (!post) {
      container.innerHTML = '<p class="text-white">Bài viết không tồn tại.</p>';
      return;
    }

    // Lấy danh mục và tags (nếu có)
    const category = post.category && post.category[0] ? post.category[0].name : 'No Category';
    const tags = post.tags ? post.tags.map(tag => `＃${tag.name}`) : ['No Tags'];

    // Tạo HTML hiển thị bài viết
    const postHTML = `
      
        <div class="flex items-center justify-start gap-4">
          <div class="text-base lg:text-xl text-white max-lg:max-w-full">株式会社ABC</div>
          <div class="text-white bg-[#D70C18] text-sm lg:text-base py-0.5 px-4">${category}</div>
        </div>
        <div class="text-3xl lg:text-5xl text-white my-4">
          ${post.post_title}
          <span class="lowercase mt-4">to-suto</span>
        </div>
        <div class="flex gap-4 items-center mt-4 text-lg whitespace-nowrap text-zinc-400">
          ${tags
            .map(tag => `<div class="self-stretch my-auto w-[71px]">${tag}</div>`)
            .join('')}
        </div>
        <div
          class="flex gap-5 justify-between self-end py-1.5 lg:py-3.5 pr-3.5 pl-5 lg:pl-10 mt-5 lg:mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-52 lg:w-[295px] hover:cursor-pointer btn-arrow"
        >
          <div class="text-sm lg:text-base my-auto uppercase">view more</div>
          <div
            class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" />
          </div>
        </div>
      
    `;

    container.innerHTML = postHTML; // Gắn HTML vào container
  }

  // Gọi hàm hiển thị bài viết
  renderSpecificPost('女性用マッチングアプリ');
</script>
